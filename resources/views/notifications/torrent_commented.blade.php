{{-- Комментарий к раздаче --}}
<strong>{{ $notification->data['comment']['user']['name'] }}</strong>
{{ trans("notifications.{$class_basename}") }}
<a class="link" href="{{ action('Torrents@torrent', $notification->data['id']) }}">{{ str_limit($notification->data['title'], 100) }}</a>
<div class="my-1">{!! $notification->data['comment']['html'] !!}</div>