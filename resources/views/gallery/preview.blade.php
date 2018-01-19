@extends('gallery.base')

@section('content')
<div class="row">
  <div class="col-lg-3 col-xl-2 text-center">
    <a href="{{ path("$self@view", $image) }}">
      <img class="screenshot" src="{{ $image->thumbnailUrl() }}">
    </a>
  </div>
  <div class="col-lg-7 col-xl-6 mt-4 mt-md-0">
    <div>Ссылка:</div>
    <input class="form-control js-highlight" value="{{ $image->originalUrl() }}">
    <div class="mt-2">Полная картинка:</div>
    <input class="form-control js-highlight" value="[img]{{ $image->originalUrl() }}[/img]">
    {{-- TODO: thumb --}}
  </div>
</div>
@endsection
