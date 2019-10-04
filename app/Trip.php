<?php namespace App;

use App\Traits\HasLocalizedTitle;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ivacuum\Generic\Utilities\TextImagesParser;
use Symfony\Component\Finder\Finder;

/**
 * Поездка
 *
 * @property int $id
 * @property int $city_id
 * @property int $user_id
 * @property string $title_ru
 * @property string $title_en
 * @property string $slug
 * @property \Illuminate\Support\Carbon $date_start
 * @property \Illuminate\Support\Carbon $date_end
 * @property int $status
 * @property string $markdown
 * @property string $html
 * @property string $meta_title_ru
 * @property string $meta_title_en
 * @property string $meta_description_ru
 * @property string $meta_description_en
 * @property string $meta_image
 * @property int $views
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 *
 * @property \App\City $city
 * @property \Illuminate\Support\Collection|\App\Comment[] $comments
 * @property \Illuminate\Support\Collection|\App\Comment[] $commentsPublished
 * @property \App\Country $country
 * @property \Illuminate\Database\Eloquent\Collection|\App\Email[] $emails
 * @property \Illuminate\Database\Eloquent\Collection|\App\Photo[] $photos
 * @property \App\User $user
 *
 * @property-read int $comments_count
 * @property-read string $meta_title
 * @property-read string $meta_description
 * @property-read string $period
 * @property-read int $photos_count
 * @property-read string $title
 * @property-read int $year
 *
 * @mixin \Eloquent
 */
class Trip extends Model
{
    use HasLocalizedTitle;

    const STATUS_INACTIVE = 0;
    const STATUS_PUBLISHED = 1;
    const STATUS_HIDDEN = 2;

    const COLUMNS_LIST = [
        'id',
        'user_id',
        'city_id',
        'title_ru',
        'title_en',
        'slug',
        'date_start',
        'date_end',
        'status',
        'views',
    ];

    protected $guarded = ['id', 'html', 'views', 'created_at', 'updated_at'];
    protected $dates = ['date_start', 'date_end'];

    protected $casts = [
        'views' => 'int',
        'status' => 'int',
        'city_id' => 'int',
        'user_id' => 'int',
    ];

    // Relations
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'rel');
    }

    public function commentsPublished()
    {
        return $this->comments()->where('status', Comment::STATUS_PUBLISHED);
    }

    public function emails()
    {
        return $this->morphMany(Email::class, 'rel');
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'rel');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Scopes
    public function scopeNext(Builder $query)
    {
        return $query->where('user_id', $this->user_id)
            ->where('date_start', '>=', $this->date_start)
            ->where('status', static::STATUS_PUBLISHED)
            ->where('id', '<>', $this->id)
            ->orderBy('date_start')
            ->take(2);
    }

    public function scopePrevious(Builder $query, $nextTrips = 2)
    {
        // Всего 4 места под ссылки помимо текущей поездки
        // prev prev current next next
        // При просмотре последней поездки будет
        // prev prev prev prev current
        $take = 4 - $nextTrips;

        return $query->where('user_id', $this->user_id)
            ->where('date_start', '<=', $this->date_start)
            ->where('status', static::STATUS_PUBLISHED)
            ->where('id', '<>', $this->id)
            ->orderBy('date_start', 'desc')
            ->take($take);
    }

    public function scopePublished(Builder $query)
    {
        return $query->where('status', static::STATUS_PUBLISHED);
    }

    public function scopeVisible(Builder $query)
    {
        return $query->where('status', '!=', static::STATUS_HIDDEN);
    }

    // Attributes
    public function getMetaDescriptionAttribute(): string
    {
        return $this->{'meta_description_' . \App::getLocale()};
    }

    public function getMetaTitleAttribute(): string
    {
        return $this->{'meta_title_' . \App::getLocale()};
    }

    public function getPeriodAttribute(): string
    {
        if ($this->date_start->month === $this->date_end->month) {
            return $this->monthName($this->date_start->month);
        }

        return $this->monthName($this->date_start->month) . '–' . $this->monthName($this->date_end->month);
    }

    public function getYearAttribute(): int
    {
        return $this->date_start->year;
    }

    public function setMarkdownAttribute(string $value): void
    {
        $this->attributes['markdown'] = $value;

        $this->attributes['html'] = \Parsedown::instance()
            ->text((new TextImagesParser)->parse($value));
    }

    public function setSlugAttribute(string $value): void
    {
        $this->attributes['slug'] = mb_strtolower($value);
    }

    // Methods
    public function breadcrumb(): string
    {
        return $this->title;
    }

    public function cityTimeline()
    {
        return $this->where('user_id', $this->user_id)
            ->where('city_id', $this->city_id)
            ->where('status', '<>', static::STATUS_HIDDEN)
            ->orderBy('date_start')
            ->get()
            ->groupBy('year');
    }

    public function createStoryFile(): bool
    {
        $tpl = str_replace('.', '/', $this->template());

        return touch(base_path("resources/views/{$tpl}.blade.php"));
    }

    public function deleteStoryFile(): bool
    {
        $tpl = str_replace('.', '/', $this->template());

        return unlink(base_path("resources/views/{$tpl}.blade.php"));
    }

    public static function forInputSelect()
    {
        return static::orderBy('date_start', 'desc')->get(['id', 'slug'])->pluck('slug', 'id');
    }

    public function imgAltText(): string
    {
        return "{$this->city->country->emoji} {$this->title}, {$this->city->country->title}, {$this->timelinePeriod(true)}.";
    }

    public function loadCity(): void
    {
        if (!$this->relationLoaded('city')) {
            $this->setRelation('city', \CityHelper::findById($this->city_id));
        }
    }

    public function loadCityAndCountry(): void
    {
        $this->loadCity();
        $this->city->loadCountry();
    }

    public function localizedDate(): string
    {
        if ($this->date_end->isSameDay($this->date_start)) {
            return trim($this->date_start->formatLocalized(trans('life.date.day_month_year')));
        }

        if ($this->date_start->month !== $this->date_end->month) {
            return sprintf(
                trans('life.date.day_month_day_month_year'),
                $this->date_start->day,
                $this->date_start->formatLocalized('%B'),
                $this->date_end->day,
                $this->date_end->formatLocalized('%B'),
                $this->date_end->formatLocalized('%Y')
            );
        }

        return sprintf(
            trans('life.date.day_day_month_year'),
            $this->date_start->day,
            $this->date_end->day,
            $this->date_start->formatLocalized('%B'),
            $this->date_start->formatLocalized('%Y')
        );
    }

    public function localizedDateWithoutYear(): string
    {
        if ($this->date_end->isSameDay($this->date_start)) {
            return trim($this->date_start->formatLocalized(trans('life.date.day_month')));
        }

        if ($this->date_start->month !== $this->date_end->month) {
            return sprintf(
                trans('life.date.day_month_day_month'),
                $this->date_start->day,
                $this->date_start->formatLocalized('%B'),
                $this->date_end->day,
                $this->date_end->formatLocalized('%B')
            );
        }

        return sprintf(
            trans('life.date.day_day_month'),
            $this->date_start->day,
            $this->date_end->day,
            $this->date_start->formatLocalized('%B')
        );
    }

    public function metaDescription(): string
    {
        return $this->meta_description;
    }

    public function metaImage(?int $width = null, ?int $height = null): string
    {
        if (!$this->meta_image) {
            return '';
        }

        if (Str::startsWith($this->meta_image, 'http')) {
            return $this->meta_image;
        }

        if ($width && $height) {
            return \ViewHelper::picArbitrary($width, $height, $this->slug, $this->meta_image);
        }

        return \ViewHelper::pic($this->slug, $this->meta_image);
    }

    public function metaTitle(): string
    {
        if ($this->meta_title) {
            return $this->meta_title;
        }

        $suffix = '';

        if (isset($this->photos_count) && $this->photos_count > 0) {
            $suffix = " · " . \ViewHelper::plural('photos', $this->photos_count);
        }

        return "{$this->title} · {$this->localizedDate()}{$suffix}";
    }

    public function template(): string
    {
        return 'life.trips.' . str_replace('.', '_', $this->slug);
    }

    public function timelinePeriod(bool $year = false): string
    {
        return $this->monthName($this->date_start->month) . ($year ? " {$this->date_start->year}" : '');
    }

    public function www(?string $anchor = null): string
    {
        return $this->user_id === 1
            ? path('Life@page', $this->slug) . $anchor
            : path('UserTravelTrips@show', [$this->user->login, $this->slug]) . $anchor;
    }

    public function wwwLocale(?string $anchor = null, string $locale = ''): string
    {
        return $this->user_id === 1
            ? path_locale('Life@page', $this->slug, false, $locale) . $anchor
            : path_locale('UserTravelTrips@show', [$this->user->login, $this->slug], false, $locale) . $anchor;
    }

    /**
     * @return \Symfony\Component\Finder\Finder|\Symfony\Component\Finder\SplFileInfo[]
     */
    public static function templatesIterator()
    {
        return Finder::create()
            ->files()
            ->in(base_path('resources/views/life/trips'))
            ->name('*.blade.php')
            ->notName('base.blade.php')
            ->sortByName();
    }

    public static function tripsByCities(int $userId = 0)
    {
        $tripsByCities = [];

        static::query()
            ->when($userId > 0, function (Builder $query) use ($userId) {
                return $query->where('user_id', $userId);
            })
            ->visible()
            ->get(['id', 'city_id', 'status'])
            ->each(function ($trip) use (&$tripsByCities) {
                if ($trip->status === static::STATUS_PUBLISHED) {
                    @$tripsByCities[$trip->city_id]['published'] += 1;
                }

                @$tripsByCities[$trip->city_id]['total'] += 1;
            });

        return collect($tripsByCities);
    }

    public static function tripsWithCover(?int $count = null)
    {
        return \Cache::remember(CacheKey::TRIPS_PUBLISHED_WITH_COVER, now()->addDays(1), function () {
            // Не нужно ограничение по пользователю, так как meta_image есть только у user_id=1
            return static::query()
                ->published()
                ->where('meta_image', '<>', '')
                ->orderBy('date_start', 'desc')
                ->get();
        })->when($count > 0, function (Collection $trips) use ($count) {
            return $trips->count() > $count
                ? $trips->random($count)
                : $trips;
        });
    }

    public static function idsByCity(?int $id = null)
    {
        $ids = \Cache::rememberForever(CacheKey::TRIPS_PUBLISHED_BY_CITY, function () {
            $trips = static::published()->get(['id', 'city_id']);

            $result = [];

            foreach ($trips as $trip) {
                $result[$trip->city_id][] = $trip->id;
            }

            return $result;
        });

        if ($id && !empty($ids[$id])) {
            return $ids[$id];
        }

        return $ids;
    }

    public static function idsByCountry(?int $id = null)
    {
        $ids = \Cache::rememberForever(CacheKey::TRIPS_PUBLISHED_BY_COUNTRY, function () {
            $trips = static::query()
                ->published()
                ->with('city:id,country_id')
                ->get(['id', 'city_id']);

            $result = [];

            foreach ($trips as $trip) {
                $result[$trip->city->country_id][] = $trip->id;
            }

            return $result;
        });

        if ($id && !empty($ids[$id])) {
            return $ids[$id];
        }

        return $ids;
    }

    protected function monthName(int $month): string
    {
        // Собственный перевод, так как нужен именительный падеж в русском языке
        return trans("months.{$month}");
    }
}
