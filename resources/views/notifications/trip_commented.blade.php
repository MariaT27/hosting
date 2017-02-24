{{-- Комментарий к поездке --}}
<strong>{{ $notification->data['comment']['user']['name'] }}</strong>
{{ trans("notifications.{$class_basename}") }}
<a class="link" href="{{ action('Life@page', $notification->data['slug']) }}#comment-{{ $notification->data['comment']['id'] }}">{{ str_limit($notification->data['title'], 100) }}</a>
<div class="my-1">{!! $notification->data['comment']['html'] !!}</div>
