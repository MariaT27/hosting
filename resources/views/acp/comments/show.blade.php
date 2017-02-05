@extends("$tpl.base")

@section('content')
<div>
  {!! nl2br($model->html) !!}
</div>
@if (Auth::user()->isRoot())
  <pre class="json-model">{{ $model->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
@endif
@endsection
