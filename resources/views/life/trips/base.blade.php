@extends('life.base', [
  'meta_title' => $trip->metaTitle(),
  'meta_image' => $trip->metaImage(),
  'meta_description' => $trip->metaDescription(),
])

@section('content_header')
@parent
@include('tpl.city-timeline')
<div class="d-flex flex-wrap align-items-center mb-2">
  <img class="flag-24 flag-shadow mr-2" src="{{ $trip->city->country->flagUrl() }}">
  <h1 class="h2 mb-1 mr-2">{{ $trip->title }}</h1>
  @include('tpl.city-map-button', ['city' => $trip->city])
  @if (optional(auth()->user())->isRoot())
    <a class="btn btn-default btn-sm" href="{{ UrlHelper::edit('Acp\Trips', $trip) }}">
      @svg (pencil)
    </a>
  @endif
</div>
<time datetime="{{ $trip->date_start->toDateString() }}"></time>
<div id="trip_city_map" class="trip-city-map mb-3" style="display: none;"></div>

<div class="mw-1000 js-trip-shortcuts">
@endsection

@section('content_footer')
</div>

@include('tpl.trips-timeline')

<div class="h4 mt-4">@ru Поделиться ссылкой @en Share @endru</div>
@include('tpl.social-buttons', ['title' => $trip->metaTitle(), 'url' => Request::url()])

@if (Auth::check())
  @if (!Auth::user()->notify_trips)
    <div class="alert alert-info mt-4">
      <div class="mb-2">{{ trans('life.newsletter.description') }}</div>
      <form action="{{ path('Subscriptions@update') }}" method="post">
        {{ ViewHelper::inputHiddenMail() }}
        <button class="btn btn-default btn-sm font-small-caps svg-flex svg-label">
          @svg (mail)
          {{ trans('mail.subscribe') }}
        </button>
        <input type="hidden" name="trips" value="1">
        @method('put')
        @csrf
      </form>
    </div>
  @endif
@else
  <div class="alert alert-info mt-4">
    <div class="mb-2">{{ trans('life.newsletter.description') }}</div>
    <div class="d-flex">
      <a class="btn btn-default btn-sm svg-flex svg-label font-small-caps mr-3" href="{{ path('Subscriptions@edit', ['trips' => 1]) }}">
        @svg (mail)
        {{ trans('mail.subscribe') }}
      </a>
    </div>
  </div>
@endif
@parent

@if (isset($comments))
  @include('tpl.comments-list')
  @include('tpl.comment-add', ['params' => ['trip', $trip->id]])
@endif
@endsection
