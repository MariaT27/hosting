@extends('base')

@section('global_menu')
<li>
  <a class="{{ $view === 'retracker.index' ? 'navbar-selected' : '' }}" href="{{ path('Retracker@index') }}">
    {{ trans('retracker.index') }}
  </a>
</li>
<li>
  <a class="{{ $view === 'retracker.usage' ? 'navbar-selected' : '' }}" href="{{ path('Retracker@usage') }}">
    {{ trans('retracker.usage') }}
  </a>
</li>
<li>
  <a class="{{ $view === 'retracker.dev' ? 'navbar-selected' : '' }}" href="{{ path('Retracker@dev') }}">
    {{ trans('retracker.dev') }}
  </a>
</li>
@endsection

@section('content_header')
<div class="row">
  <div class="col-md-3">
    <div class="text-center">
      <a href="{{ path('Retracker@index') }}">
        <img src="https://ivacuum.org/i/rt/logo.png" width="128" height="128">
      </a>
    </div>
    <h3>Ссылки</h3>
    <ul>
      <li class="d-sm-none">
        <a class="link" href="{{ path('Retracker@index') }}">
          {{ trans('retracker.index') }}
        </a>
      </li>
      <li class="d-sm-none">
        <a class="link" href="{{ path('Retracker@usage') }}">
          {{ trans('retracker.usage') }}
        </a>
      </li>
      <li class="d-sm-none">
        <a class="link" href="{{ path('Retracker@dev') }}">
          {{ trans('retracker.dev') }}
        </a>
      </li>
      <li>
        <a class="link" href="{{ path('Files@download', 122) }}">
          Скачать исходники ретрекера
        </a>
      </li>
    </ul>
  </div>
  <div class="col-md-9">
@endsection

@section('content_footer')
  </div>
</div>
@endsection
