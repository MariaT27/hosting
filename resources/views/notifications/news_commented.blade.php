{{-- Комментарий к новости --}}
<strong>{{ $notification->data['comment']['user']['name'] }}</strong>
{{ trans("notifications.{$class_basename}") }}
<a class="link" href="{{ path('News@show', $notification->data['id']) }}#comment-{{ $notification->data['comment']['id'] }}">{{ str_limit($notification->data['title'], 100) }}</a>
<div class="my-1">{!! $notification->data['comment']['html'] !!}</div>
