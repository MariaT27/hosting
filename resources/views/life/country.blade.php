@extends('life.base', [
  'meta_title' => $country->title,
])

@section('content')
<h2 class="mt-0">
  <span class="emoji">{{ $country->emoji }}</span>
  {{ $country->title }}
</h2>

@include('tpl.trips_by_years')
@endsection
