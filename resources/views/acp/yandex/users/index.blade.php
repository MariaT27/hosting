@extends('acp.base')

@section('content')
<div class="boxed-group flush">
  @include('acp.tpl.create')
  <h3>
    Аккаунты в Яндексе
    <span class="label label-default">{{ sizeof($users) }}</span>
  </h3>
  <div class="boxed-group-inner">
    <table class="table-stats">
      <thead>
        <tr>
          <th>#</th>
          <th>Аккаунт</th>
          <th>Доменов</th>
        </tr>
      </thead>
      @foreach ($users as $i => $user)
        <tr class="js-dblclick-edit" data-dblclick-url="{{ action("$self@edit", $user) }}">
          <td>{{ $i + 1 }}</td>
          <td>
            <a href="{{ action("$self@show", $user) }}" class="link">
              {{ $user->account }}
            </a>
          </td>
          <td>{{ sizeof($user->domains) }}</td>
        </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
