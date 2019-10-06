@extends('base')

@push('head')
<link rel="alternate" type="application/rss+xml" title="{{ trans('news.index') }}" href="{{ url(path('NewsRss@index')) }}">
@endpush

@section('content')
<div class="flex flex-wrap items-center antialiased mb-6">
  <h1 class="h2 mb-1 mr-4">{{ trans('news.index') }}</h1>
  @if (Auth::check())
    <form class="mr-4" action="{{ path([App\Http\Controllers\Subscriptions::class, 'update']) }}" method="post">
      {{ ViewHelper::inputHiddenMail() }}
      <button class="btn btn-default text-sm py-1 small-caps svg-flex svg-label">
        @svg (mail)
        {{ trans(Auth::user()->notify_news ? 'mail.unsubscribe' : 'mail.subscribe') }}
      </button>
      <input type="hidden" name="news" value="{{ Auth::user()->notify_news ? 0 : 1 }}">
      @method('put')
      @csrf
    </form>
  @else
    <a
      class="btn btn-default text-sm py-1 svg-flex svg-label small-caps mr-4"
      href="{{ path([App\Http\Controllers\Subscriptions::class, 'edit'], ['news' => 1]) }}"
    >
      @svg (mail)
      {{ trans('mail.subscribe') }}
    </a>
  @endif
  <a
    class="text-lg svg-flex svg-label small-caps"
    href="{{ path([App\Http\Controllers\NewsRss::class, 'index']) }}"
  >
    @svg (rss-square)
    rss
  </a>
</div>
@if (sizeof($news))
  <div class="md:flex md:-mx-4">
    <div class="md:w-2/3 md:px-4">
      @foreach ($news as $model)
        <article itemscope itemtype="http://schema.org/BlogPosting">
          <header>
            <h3 itemprop="headline"><a class="link" href="{{ $model->www() }}" itemprop="url">{{ $model->title }}</a></h3>
            <div class="svg-labels svg-muted text-muted text-sm mb-4">
              <span class="svg-flex svg-label">
                @svg (calendar-o)
                <time itemprop="datePublished" datetime="{{ $model->created_at->toDateString() }}">
                  {{ $model->created_at->formatLocalized('%e %B %Y') }}
                </time>
              </span>
              @if (optional($model->user)->login)
                <span class="svg-flex svg-label">
                  @svg (pencil)
                  {{ $model->user->login }}
                </span>
              @endif
              <span class="svg-flex svg-label">
                @svg (eye)
                {{ ViewHelper::number($model->views) }}
              </span>
              @if ($model->comments_count)
                <span class="svg-flex svg-label">
                  @svg (comment-o)
                  <span itemprop="commentCount">{{ ViewHelper::number($model->comments_count) }}</span>
                </span>
              @endif
            </div>
          </header>
          <div class="{{ !$loop->last ? 'mb-12' : '' }}">
            <div class="hidden sm:block antialiased hanging-puntuation-first lg:text-lg markdown-body break-words js-news-views-observer" itemprop="articleBody" data-id="{{ $model->id }}">{!! $model->html !!}</div>
          </div>
        </article>
      @endforeach
    </div>
  </div>

  @include('tpl.paginator', ['paginator' => $news])
@else
  @ru
    <p>По данным критериям новости не найдены.</p>
  @en
    <p>No news found.</p>
  @endru
@endif

@endsection
