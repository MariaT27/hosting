<?php namespace App\Http\Controllers;

use App\News as Model;
use Illuminate\Database\Eloquent\Builder;

class News extends Controller
{
    public function index($year = null, $month = null, $day = null)
    {
        $news = Model::with('user')
            ->withCount('commentsPublished AS comments_count')
            ->published()
            ->where('locale', \App::getLocale())
            ->when($year || $month || $day, function (Builder $query) use ($year, $month, $day) {
                return $query->whereBetween('created_at', Model::interval($year, $month, $day));
            })
            ->orderByDesc('created_at')
            ->paginate();

        \Breadcrumbs::push(trans('news.index'), 'news');

        return view('news.index', ['news' => $news]);
    }

    public function bc()
    {
        return redirect(path([self::class, 'index']), 301);
    }

    public function day($year, $month, $day)
    {
        $validator = \Validator::make(
            ['date' => "{$year}-{$month}-{$day}"],
            ['date' => 'date_format:Y-m-d']
        );

        abort_unless($validator->passes(), 404);

        return $this->index($year, $month, $day);
    }

    public function month($year, $month)
    {
        $validator = \Validator::make(
            ['date' => "{$year}-{$month}"],
            ['date' => 'date_format:Y-m']
        );

        abort_unless($validator->passes(), 404);

        return $this->index($year, $month);
    }

    public function show(int $id)
    {
        $news = Model::find($id);

        if (null === $news) {
            return redirect(path([self::class, 'index']), 301);
        }

        abort_unless($news->status === Model::STATUS_PUBLISHED, 404);

        if ($url = $this->redirectUrlToOriginLocale($news)) {
            return redirect($url, 301);
        }

        event(new \App\Events\Stats\NewsViewed($news->id));

        \Breadcrumbs::push(trans('news.index'), 'news')
            ->push($news->title);

        return view($this->view, [
            'news' => $news,
            'comments' => $news->commentsPublished()->with('user')->orderBy('created_at')->get(),
            'metaTitle' => $news->title,
        ]);
    }

    public function year($year)
    {
        $validator = \Validator::make(
            ['year' => $year],
            ['year' => 'date_format:Y']
        );

        abort_unless($validator->passes(), 404);

        return $this->index($year);
    }

    protected function redirectUrlToOriginLocale(Model $news): string
    {
        $locale = \App::getLocale();

        if ($locale === $news->locale) {
            return '';
        }

        return $news->locale === 'ru'
            ? request()->path()
            : "/{$news->locale}/".request()->path();
    }
}
