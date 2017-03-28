<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Страна
 *
 * @property integer $id
 * @property string  $title_ru
 * @property string  $title_en
 * @property string  $slug
 * @property string  $emoji
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @property-read \App\City $cities
 * @property-read \App\Trip $trips
 *
 * @property-read string  $title
 */
class Country extends Model
{
    protected $fillable = ['title_ru', 'title_en', 'slug', 'emoji'];

    // Relations
    public function cities()
    {
        return $this->hasMany(City::class)
            ->orderBy(self::titleField());
    }

    public function trips()
    {
        return $this->hasManyThrough(Trip::class, City::class)
            ->orderBy('date_start', 'desc');
    }

    // Attributes
    public function getTitleAttribute()
    {
        return $this->{self::titleField()};
    }

    // Methods
    public function breadcrumb()
    {
        return "{$this->emoji} {$this->title}";
    }

    public function initial()
    {
        return mb_substr($this->title, 0, 1);
    }

    public function www()
    {
        return action('Life@country', $this->slug);
    }

    // Static methods
    public static function titleField()
    {
        return 'title_'.\App::getLocale();
    }
}
