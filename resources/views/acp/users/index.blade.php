@extends('acp.list')

@section('toolbar')
<ul class="nav nav-link-tabs">
  <li class="{{ !$filter ? 'active' : '' }}">
    <a class="js-pjax" href="{{ Request::fullUrlWithQuery(['filter' => null, 'page' => null]) }}">
      Все
    </a>
  </li>
  <li class="{{ $filter === 'weekly-login' ? 'active' : '' }}">
    <a class="js-pjax" href="{{ Request::fullUrlWithQuery(['filter' => 'weekly-login', 'page' => null]) }}">
      Заходили на неделе
    </a>
  </li>
  <li class="{{ $filter === 'monthly-login' ? 'active' : '' }}">
    <a class="js-pjax" href="{{ Request::fullUrlWithQuery(['filter' => 'monthly-login', 'page' => null]) }}">
      Заходили в месяце
    </a>
  </li>
</ul>
@endsection

@section('content-list')
<table class="table-stats table-adaptive">
  <thead>
  <tr>
    <th class="text-right">ID</th>
    <th>Электронная почта</th>
    <th>Активен</th>
    <th>Дата реги</th>
    <th>Вход</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($models as $model)
    <tr class="js-dblclick-edit" data-dblclick-url="{{ action("$self@edit", [$model, 'goto' => Request::fullUrl()]) }}">
      <td class="text-right">{{ $model->id }}</td>
      <td>
        <a href="{{ action("$self@show", $model) }}" class="link">
          {{ $model->email }}
        </a>
      </td>
      <td>
        @if ($model->status === App\User::STATUS_ACTIVE)
          Да
        @endif
      </td>
      <td>{{ ViewHelper::dateShort($model->created_at) }}</td>
      <td>{{ ViewHelper::dateShort($model->last_login_at) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
