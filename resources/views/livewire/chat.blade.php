<?php /** @var \App\ChatMessage $message */ ?>

<div>
  <div wire:poll.60s>
    <div class="chat-container antialiased rounded overflow-y-auto py-1 pr-3 pl-2 text-sm border border-gray-300">
      @foreach ($rows->groupBy(fn (App\ChatMessage $chatMessage) => $chatMessage->created_at->toDateString()) as $date => $messages)
        <div>
          <div class="sticky top-0 text-grey-500 text-xs my-1 text-center">
            <div class="chat-bg inline-block mx-auto p-1 rounded">{{ Carbon\CarbonImmutable::parse($date)->formatLocalized('%e %B') }}</div>
          </div>
          <?php $lastUserId = null ?>
          @foreach ($messages as $message)
            <div class="flex mt-2" wire:key="{{ $message->id }}">
              <div class="flex-shrink-0 w-10">
                @if ($lastUserId !== $message->user_id)
                  <div>
                    @include('tpl.avatar', ['user' => $message->user, 'classes' => 'w-8 h-8'])
                  </div>
                @endif
              </div>
              <div class="flex-grow">
                @if ($lastUserId !== $message->user_id)
                  <div class="leading-none" style="color: {{ ViewHelper::avatarBg($message->user_id) }}">{{ $message->user->publicName() }}</div>
                @endif
                <div class="break-words">{!! $message->html !!}</div>
              </div>
              <div class="flex-shrink-0 text-xs text-grey-500 text-right w-12" title="{{ $message->created_at->toDateString() }}">
                {{ $message->created_at->format('H:i') }}
              </div>
            </div>
            <?php $lastUserId = $message->user_id ?>
          @endforeach
        </div>
      @endforeach
    </div>
    <form class="mt-1 mb-4" wire:submit.prevent="post">
      <div class="flex w-full">
        <input
          class="form-input rounded-r-none"
          type="text"
          enterkeyhint="send"
          placeholder="Сообщение в чат..."
          wire:model.lazy="text"
        >
        <button class="btn btn-default -ml-px rounded-l-none">Отправить</button>
      </div>
      @error('text')
        <div class="text-red-600">{{ $message }}</div>
      @enderror
    </form>
  </div>
</div>

@push('js')
<script>
(function () {
  function getChatContainer() {
    return document.querySelector('.chat-container')
  }

  function isScrolledDown(el) {
    return el.scrollHeight - el.scrollTop - el.clientHeight < 35
  }

  function scrollChatDown() {
    getChatContainer().scroll(0, 9999999)
  }

  scrollChatDown()

  document.addEventListener('livewire:load', function () {
    window.Livewire.hook('message.processed', function () {
      if (isScrolledDown(getChatContainer())) {
        scrollChatDown()
      }
    })
  })
})()
</script>
@endpush
