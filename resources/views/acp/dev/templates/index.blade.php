@extends('acp.dev.base')

@section('content')
<p>
  @if (request('hide_finished'))
    <a class="btn btn-default btn-sm" href="{{ UrlHelper::filter(['hide_finished' => null]) }}">Показать все</a>
  @else
    <a class="btn btn-default btn-sm" href="{{ UrlHelper::filter(['hide_finished' => 1]) }}">Скрыть переведенные</a>
  @endif
</p>
<table class="table-stats table-adaptive">
  <thead>
    <tr>
      <th>Шаблон</th>
      <th class="md:tw-text-right">@svg (picture-o)</th>
      @foreach (config('cfg.locales') as $key => $value)
        <th class="md:tw-text-right tw-uppercase">{{ $key }}</th>
      @endforeach
    </tr>
  </thead>
  <tfoot>
    <tr>
      <td><strong>Итого: {{ sizeof($templates) }}</strong></td>
      <td class="md:tw-text-right tw-whitespace-no-wrap">{{ ViewHelper::number($total->pics) }}</td>
      @foreach (config('cfg.locales') as $key => $value)
        <td class="md:tw-text-right tw-whitespace-no-wrap">{{ ViewHelper::number($total->{$key}) }}</td>
      @endforeach
    </tr>
  </tfoot>
  <tbody>
    @foreach ($templates as $template)
      <tr>
        <td>
          <a href="{{ path("$self@show", $template->name)}}">
            {{ $template->name }}
          </a>
        </td>
        <td class="md:tw-text-right">{{ $template->pics ?: '—' }}</td>
        @foreach (config('cfg.locales') as $key => $value)
          <td class="md:tw-text-right">{{ $template->i18n->{$key} ?: '—' }}</td>
        @endforeach
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
