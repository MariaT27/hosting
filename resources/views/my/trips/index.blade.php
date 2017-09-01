@extends('my.base')

@section('content')
<h3 class="mt-2 mb-3">
  {{ trans('my.trips') }}
  <small>{{ ViewHelper::number($models->total()) }}</small>
  <a class="btn btn-success" href="{{ path('MyTrips@create') }}">
    {{ trans('acp.trips.create') }}
  </a>
  @if (optional(Auth::user())->login)
    <a class="btn btn-default" href="{{ path('UserTravelTrips@index', \Auth::user()->login) }}">
      Просмотреть
    </a>
  @endif
  <a class="btn btn-default" href="{{ path('Docs@page', 'trips') }}">
    @svg (question-circle)
  </a>
</h3>

@if ($models->count())
  <table class="table-stats table-adaptive">
    <thead>
    <tr>
      <th class="text-right">#</th>
      <th>{{ ViewHelper::modelFieldTrans('trip', 'title') }}</th>
      <th></th>
      <th>Дата начала</th>
      <th>{{ ViewHelper::modelFieldTrans('trip', 'slug') }}</th>
      <th class="text-right text-nowrap">@svg (eye)</th>
      <th class="text-right text-nowrap">@svg (comment-o)</th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach ($models as $model)
      <tr class="js-dblclick-edit" data-dblclick-url="{{ UrlHelper::edit($self, $model) }}">
        <td class="text-right"><span class="d-sm-none">#</span>{{ ViewHelper::paginatorIteration($models, $loop) }}</td>
        <td><a href="{{ path("$self@show", $model) }}">{{ $model->title }}</a></td>
        <td>
          @if ($model->status === App\Trip::STATUS_HIDDEN)
            <span class="tooltipped tooltipped-n" aria-label="Заметка скрыта">
              @svg (eye-slash)
            </span>
          @elseif ($model->status === App\Trip::STATUS_INACTIVE)
            <span class="tooltipped tooltipped-n" aria-label="Заметка пишется">
              @svg (pencil)
            </span>
          @endif
        </td>
        <td>{{ $model->localizedDate() }}</td>
        <td>
          @if ($model->status === App\Trip::STATUS_PUBLISHED)
            <a href="{{ $model->www() }}">{{ $model->slug }}</a>
          @else
            {{ $model->slug }}
          @endif
        </td>
        <td class="text-right">
          @if ($model->views > 0)
            {{ ViewHelper::number($model->views) }}
          @endif
        </td>
        <td class="text-right">
          @if ($model->comments_count > 0)
            {{ ViewHelper::number($model->comments_count) }}
          @endif
        </td>
        <td><a href="{{ UrlHelper::edit($self, $model) }}">@svg (pencil)</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>

  @include('tpl.paginator', ['paginator' => $models])
@else
  <p>Хронология ваших поездок на данный момент пуста.</p>
  <p>Самое время <a href="{{ path('MyTrips@create') }}">добавить первую</a>.</p>
@endif
@endsection