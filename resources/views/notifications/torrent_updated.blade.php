{{-- Раздача обновлена --}}
{{ trans("notifications.{$class_basename}") }}
<a class="link" href="{{ path('Torrents@show', $notification->data['id']) }}">{{ Illuminate\Support\Str::limit($notification->data['title'], 100) }}</a>
<time
  class="text-muted"
  datetime="{{ $notification->created_at->toDateString() }}"
  title="{{ $notification->created_at->toAtomString() }}"
>
  {{ $notification->created_at->diffForHumans() }}
</time>
<div class="mt-2">
  <a
    class="btn btn-success text-sm py-1 js-magnet"
    href="{{ ViewHelper::magnet($notification->data['info_hash'], $notification->data['announcer'], $notification->data['title']) }}"
    data-action="{{ path('Torrents@magnet', $notification->data['id']) }}"
  >
    {{ trans('torrents.download') }}
  </a>
</div>
