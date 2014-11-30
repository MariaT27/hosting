@extends('base', [
  'meta_title' => 'Домены',
])

@section('content')
<ul class="list-inline" style="margin: 0 0 0.5em;">
  <li><h4>Фильтр:</h4></li>
  <li>
    <h4>
      <a href="{{ action("$self@index") }}" class="link {{ !$filter ? 'active' : '' }}">
        Активные
      </a>
    </h4>
  </li>
  <li>
    <h4>
      <a href="{{ action("$self@index", ['filter' => 'external']) }}" class="link {{ $filter == 'external' ? 'active' : '' }}">
        Внешние
      </a>
    </h4>
  </li>
  <li>
    <h4>
      <a href="{{ action("$self@index", ['filter' => 'no-server']) }}" class="link {{ $filter == 'no-server' ? 'active' : '' }}">
        Без сервера
      </a>
    </h4>
  </li>
  <li>
    <h4>
      <a href="{{ action("$self@index", ['filter' => 'no-ns']) }}" class="link {{ $filter == 'no-ns' ? 'active' : '' }}">
        Без NS
      </a>
    </h4>
  </li>
  <li>
    <h4>
      <a href="{{ action("$self@index", ['filter' => 'inactive']) }}" class="link {{ $filter == 'inactive' ? 'active' : '' }}">
        Неактивные
      </a>
    </h4>
  </li>
</ul>

@include("$tpl.list")
@stop
