@extends('acp.list')

@section('content-list')
<table class="table-stats table-adaptive">
  <thead>
  <tr>
    <th class="md:tw-text-right">#</th>
    <th>Аккаунт</th>
    <th class="md:tw-text-right">Доменов</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($models as $model)
    <tr class="js-dblclick-edit" data-dblclick-url="{{ UrlHelper::edit($self, $model) }}">
      <td class="md:tw-text-right">{{ ViewHelper::paginatorIteration($models, $loop) }}</td>
      <td>
        <a href="{{ path("$self@show", $model) }}">
          {{ $model->account }}
        </a>
      </td>
      <td class="md:tw-text-right">{{ sizeof($model->domains) }}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection
