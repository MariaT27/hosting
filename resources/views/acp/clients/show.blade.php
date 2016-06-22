@extends('acp.base')

@section('content')
<div class="pull-right">
  @include('acp.tpl.delete', ['id' => $client])
</div>
<h2>
  @include('acp.tpl.back')
  {{ $client->name }}
  @include('acp.tpl.edit', ['id' => $client])
</h2>

@if ($client->text)
  <blockquote>{!! nl2br($client->text) !!}</blockquote>
@endif

@if (sizeof($client->domains))
  @include('acp.domains.list', [
    'back_url' => Request::fullUrl(),
    'domains'  => $client->domains
  ])
@else
  <div class="alert alert-warning">У клиента еще нет доменов.</div>
@endif
@endsection
