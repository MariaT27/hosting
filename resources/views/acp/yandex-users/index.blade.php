@extends('acp.list')

@section('content-list')
<table class="table-stats table-adaptive">
  <thead>
  <tr>
    <th class="text-right">#</th>
    <th>Аккаунт</th>
    <th class="text-right">Доменов</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($models as $model)
    <tr class="js-dblclick-edit" data-dblclick-url="{{ action("$self@edit", $model) }}">
      <td class="text-right">{{ $loop->iteration }}</td>
      <td>
        <a href="{{ action("$self@show", $model) }}" class="link">
          {{ $model->account }}
        </a>
      </td>
      <td class="text-right">{{ sizeof($model->domains) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection