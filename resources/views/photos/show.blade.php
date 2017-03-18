@extends('photos.base')

@section('content')
<div class="row">
  <div class="col-md-10 mb-3">
    <div class="photo-show-container">
      @if (!is_null($prev))
        <a class="photo-show-nav photo-show-prev js-pjax js-pjax-no-dim" href="{{ action("$self@show", [$prev->id, 'city_id' => $city_id, 'country_id' => $country_id, 'tag_id' => $tag_id]) }}" title="&larr;">&nbsp;</a>
      @endif
      @if (!is_null($next))
        <a class="photo-show-nav photo-show-next js-pjax js-pjax-no-dim" href="{{ action("$self@show", [$next->id, 'city_id' => $city_id, 'country_id' => $country_id, 'tag_id' => $tag_id]) }}" title="&rarr;">&nbsp;</a>
      @endif
      <img class="photo-show-img" src="{{ $photo->originalUrl() }}">
    </div>
  </div>
  <div class="col-md-2">
    <div class="text-muted">{{ trans('photos.story') }}</div>
    <div>
      {{ $photo->rel->city->country->emoji }}
      <a class="link" href="{{ action('Life@page', $photo->rel->slug) }}#{{ basename($photo->slug) }}">{{ $photo->rel->title }}</a>
    </div>

    <div class="mt-3 text-muted">{{ trans('photos.date') }}</div>
    <div>{{ $photo->rel->period }} {{ $photo->rel->year }}</div>

    <div class="mt-3">
      <div class="text-muted">
        {{ trans('photos.geotags') }}
        @if ($photo->isOnMap())
          <a href="{{ action('Photos@map', ['lat' => $photo->lat, 'lon' => $photo->lon, 'zoom' => 16]) }}">@svg (map-marker)</a>
        @endif
      </div>
      <div><a class="link" href="{{ action('Photos@city', $photo->rel->city->slug) }}">#{{ mb_strtolower($photo->rel->city->title) }}</a></div>
      <div><a class="link" href="{{ action('Photos@country', $photo->rel->city->country->slug) }}">#{{ mb_strtolower($photo->rel->city->country->title) }}</a></div>
    </div>

    @if (sizeof($photo->tags))
      <div class="mt-3">
        <div class="text-muted">{{ trans('photos.tags') }}</div>
        @foreach ($photo->tags as $tag)
          <div>
            <a class="link" href="{{ action('Photos@tag', $tag) }}">#{{ $tag->title }}</a>
          </div>
        @endforeach
      </div>
    @endif
  </div>
</div>
@endsection
