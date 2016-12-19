@extends('torrents.base')

@section('content')
<table class="table-stats">
  <thead>
    <tr>
      <td>Дата</td>
      <td></td>
      <td>Раздача</td>
      <td>Размер</td>
      <td>Сиды</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($torrents as $torrent)
      <tr>
        <td>{{ $torrent->shortDate() }}</td>
        <td>
          <a class="link" href="{{ $torrent->magnet() }}">
            @svg (magnet)
          </a>
        </td>
        <td>
          <a class="link" href="{{ action("{$self}@torrent", $torrent) }}">
            {{ $torrent->title }}
          </a>
        </td>
        <td>
          {{ $torrent->localizedSize() }}
        </td>
        <td class="text-success">{{ $torrent->seeders }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
