@extends('acp.base', [
  'meta_title' => 'Пользователи'
])

@section('content')
<div class="boxed-group flush">
  <a href="{{ action("$self@create") }}" class="boxed-group-action btn btn-success">
    <span class="glyphicon glyphicon-plus"></span>
  </a>
  <h3>
	  Пользователи
	  <span class="label label-default">{{ sizeof($users) }}</span>
  </h3>
  <div class="boxed-group-inner">
    <table class="table-stats">
      <thead>
        <tr>
          <th>#</th>
          <th>Электронная почта</th>
          <th>Активен</th>
        </tr>
      </thead>
      @foreach ($users as $i => $user)
        <tr class="js-dblclick-edit" data-dblclick-url="{{ action("$self@edit", $user->id) }}">
          <td>{{ $i + 1 }}</td>
          <td>
            <a href="{{ action("$self@show", $user->id) }}">
              {{ $user->email }}
            </a>
          </td>
          <td>{{ $user->active ? 'Да' : 'Нет' }}</td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@stop
