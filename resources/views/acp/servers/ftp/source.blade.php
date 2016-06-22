@extends('acp.base')

@section('content')
<h2>
  <a href="/acp/servers/{{ $server->id }}">
    @include('tpl.svg.chevron-left')
  </a>
  ftp://{{ $server->host }}
</h2>

<h2>
  <a href="/acp/servers/{{ $server->id }}/ftp?dir={{ $dir_up }}">
    @include('tpl.svg.chevron-left')
  </a>
  {{ basename($file) }} <small>{{ $dir_up }}</small>
</h2>

<form action="/acp/servers/{{ $server->id }}/ftp/source" method="post">
  <input type="text" class="input-type-check" name="mail" value="{{ old('mail') }}">

  <div class="form-group">
    <textarea class="form-control" name="source" style="font-family: monospace; height: 40em;">{{ $source }}</textarea>
  </div>

  <button type="submit" class="btn btn-primary">
    Сохранить изменения
  </button>

  <input type="hidden" name="file" value="{{ $file }}">
  {{ csrf_field() }}
</form>
@endsection
