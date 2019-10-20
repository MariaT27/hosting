@extends('photos.base')

@section('content')
<h3>{{ $country->title }} <span class="text-base text-muted">{{ sizeof($photos) }}</span></h3>
<div class="flex flex-wrap mobile-wide">
  @foreach ($photos as $photo)
    <div class="w-full sm:w-1/2 lg:w-1/3 mx-auto sm:mx-0">
      <a
        class="block relative w-full pb-3/4"
        href="{{ path([App\Http\Controllers\Photos::class, 'show'], [$photo, $country->getForeignKey() => $country]) }}"
      >
        <img
          class="absolute top-0 left-0 w-full object-cover js-lazy"
          src="https://life.ivacuum.org/0.gif"
          data-src="{{ $photo->thumbnailUrl() }}"
          alt=""
        >
      </a>
    </div>
  @endforeach
</div>
@endsection
