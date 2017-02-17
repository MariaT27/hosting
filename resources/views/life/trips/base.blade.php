@extends('life.base', [
  'meta_title' => $trip->metaTitle(),
  'meta_image' => $trip->metaImage(),
  'meta_description' => $trip->metaDescription(),
])

@section('content_header')
@parent
@include('tpl.city-timeline')
<h2 class="mt-0">
  <span class="emoji">{{ $trip->city->country->emoji }}</span>
  {{ $trip->title }}
  @include('tpl.city-map-button', ['city' => $trip->city])
</h2>
<div hidden id="trip_city_map" class="trip-city-map"></div>
{{--
@if ($trip->meta_image)
  <div class="cover">
    <div class="cover-image" style="background-image: url({{ $trip->meta_image }});"></div>
    <div class="cover-title">
      <span class="emoji">{{ $trip->city->country->emoji }}</span>
      {{ $trip->title }}
      <div class="cover-description">{{ $trip->getMetaDescription() }}</div>
      <div class="cover-meta">
        {{ $trip->localizedDate() }}
        &nbsp;
        <span class="emoji">{{ $trip->city->country->emoji }}</span>
        {{ $trip->city->country->title }}
      </div>
    </div>
  </div>
@else
  <h2>
    <span class="emoji">{{ $trip->city->country->emoji }}</span>
    {{ $trip->title }}
  </h2>
@endif
--}}
<div class="trip-text js-trip-shortcuts">
@endsection

@section('content_footer')
</div>

<div class="travel-timeline-container">
  @if (isset($previous_trips) && sizeof($previous_trips))
    @foreach ($previous_trips as $previous)
      <div class="travel-timeline">
        <div class="travel-timeline-date">
          {{ $previous->period }}
          @if ($previous->year !== $trip->year)
            {{ $previous->year }}
          @endif
        </div>
        <a class="link" href="{{ action('Life@page', $previous->slug) }}">{{ $previous->title }}</a>
      </div>
    @endforeach
  @endif
  <div class="travel-timeline travel-timeline-current">
    <div class="travel-timeline-date">{{ $trip->period }} {{ $trip->year }}</div>
    <strong>{{ $trip->title }}</strong>
    <div class="travel-timeline-arrows">
      @if (isset($previous_trips) && sizeof($previous_trips))
        <span class="horizontal">&larr;</span>
        <span class="vertical">&darr;</span>
      @endif
      @if (isset($previous_trips) && sizeof($next_trips))
        <span class="horizontal">&rarr;</span>
        <span class="vertical">&uarr;</span>
      @endif
    </div>
  </div>
  @if (isset($next_trips) && sizeof($next_trips))
    @foreach ($next_trips as $next)
      <div class="travel-timeline">
        <div class="travel-timeline-date">
          {{ $next->period }}
          @if ($next->year !== $trip->year)
            {{ $next->year }}
          @endif
        </div>
        <a class="link" href="{{ action('Life@page', $next->slug) }}">{{ $next->title }}</a>
      </div>
    @endforeach
  @endif
</div>

@parent

@if (isset($comments))
  @include('tpl.comments-list')
  @include('tpl.comment-add', ['params' => ['trip', $trip->id]])

  @if ($comments->hasPages())
    <div class="mt-3 text-center">
      @include('tpl.paginator', ['paginator' => $comments])
    </div>
  @endif
@endif
@endsection
