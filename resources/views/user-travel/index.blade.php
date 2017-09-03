@extends('user-travel.base', [
  'meta_title' => trans('menu.life'),
])

@section('content')
<section class="pt-0">
  <h1 class="h2 mt-0">
    {{ trans('life.trips') }}
    @if ($traveler->id == optional(auth()->user())->id)
      <a class="btn btn-success" href="{{ path('MyTrips@create') }}">
        {{ trans('acp.trips.create') }}
      </a>
    @endif
  </h1>
  <ul class="list-inline f14">
    <li><mark>{{ trans('life.by_year') }}</mark></li>
    <li><a class="link" href="{{ path('UserTravelCountries@index', $traveler->login) }}">{{ trans('life.by_country') }}</a></li>
    <li><a class="link" href="{{ path('UserTravelCities@index', $traveler->login) }}">{{ trans('life.by_city') }}</a></li>
  </ul>

  @include('tpl.trips_by_years')
</section>
@endsection
