@extends('user-travel.base', [
  'meta_title' => $trip->metaTitle(),
  'meta_image' => $trip->metaImage(),
  'meta_description' => $trip->metaDescription(),
])

@section('content_header')
@parent
@include('tpl.city-timeline')
<div class="d-flex flex-wrap align-items-center mb-2">
  <h1 class="h2 mt-0 mb-1 mr-2">
    {{ $trip->city->country->emoji }}
    {{ $trip->title }}
  </h1>
  @include('tpl.city-map-button', ['city' => $trip->city])
  @if ($traveler->id == optional(auth()->user())->id)
    <a class="btn btn-default btn-sm" href="{{ UrlHelper::edit('MyTrips', $trip) }}">
      @svg (pencil)
    </a>
  @endif
</div>
<time datetime="{{ $trip->date_start->toDateString() }}"></time>
<div hidden id="trip_city_map" class="trip-city-map"></div>

<div class="trip-text js-trip-shortcuts">
@endsection

@section('content')
{!! $trip->html !!}
@endsection

@section('content_footer')
</div>

@include('tpl.trips-timeline')
@parent

@if (isset($comments))
  @include('tpl.comments-list')
  @include('tpl.comment-add', ['params' => ['trip', $trip->id]])
@endif
@endsection
