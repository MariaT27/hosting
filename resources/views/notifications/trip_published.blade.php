{{-- Опубликована заметка о поездке --}}
{{ trans("notifications.{$class_basename}") }}
<a class="link" href="{{ action('Life@page', $notification->data['slug']) }}">{{ str_limit($notification->data['title'], 100) }}</a>