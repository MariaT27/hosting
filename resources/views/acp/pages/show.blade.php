@extends('acp.base')

@section('content')
<div class="pull-right">
  @include('acp.tpl.delete', ['id' => $page])
</div>
<h2>
  @include('acp.tpl.back', ['id' => $page])
  {{ $page->title }}
  @include('acp.tpl.edit', ['id' => $page])
</h2>

{!! $page->html !!}

@endsection
