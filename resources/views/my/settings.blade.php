@extends('my.base')

@section('content')
<h3 class="tw-mb-4">{{ trans('my.settings') }}</h3>

<div>
  <form action="{{ path("$self@update") }}" method="post">
    {{ ViewHelper::inputHiddenMail() }}
    @method('put')
    @csrf

    <div class="tw-mb-4">
      <label>{{ trans('my.theme') }}</label>
      <label class="tw-flex tw-items-center tw-font-normal">
        <input
          class="tw-mr-2 {{ $errors->has('theme') ? 'is-invalid' : '' }}"
          type="radio"
          name="theme"
          value="{{ App\User::THEME_LIGHT }}"
          {{ old('theme', Auth::user()->theme) == App\User::THEME_LIGHT ? 'checked' : '' }}
        >
        {{ trans('my.theme_light') }}
      </label>
      <label class="tw-flex tw-items-center tw-font-normal">
        <input
          class="tw-mr-2 {{ $errors->has('theme') ? 'is-invalid' : '' }}"
          type="radio"
          name="theme"
          value="{{ App\User::THEME_DARK }}"
          {{ old('theme', Auth::user()->theme) == App\User::THEME_DARK ? 'checked' : '' }}
        >
        {{ trans('my.theme_dark') }}
      </label>
      @if ($errors->has('theme'))
        <div class="invalid-feedback tw-block">{{ $errors->first('theme') }}</div>
      @endif
    </div>

    <label>{{ trans('torrents.index') }}</label>
    <div class="tw-mb-4">
      <input type="hidden" name="torrent_short_title" value="0">
      <label class="tw-flex tw-items-center tw-font-normal">
        <input
          class="tw-mr-2 {{ $errors->has('torrent_short_title') ? 'is-invalid' : '' }}"
          type="checkbox"
          name="torrent_short_title"
          value="1"
          {{ old('torrent_short_title', Auth::user()->torrent_short_title) ? 'checked' : '' }}
        >
        {{ trans('my.torrent_short_title') }}
      </label>
      @if ($errors->has('torrent_short_title'))
        <div class="invalid-feedback tw-block">{{ $errors->first('torrent_short_title') }}</div>
      @endif
      @ru
        <div class="form-help">Из названий раздач будут скрыты данные в скобках, например, Deus Ex <s>[RePack] [RUS] (2007)</s>.</div>
      @endru
    </div>

    <div class="tw-mb-4">
      <label>{{ trans('my.locale') }}</label>
      @foreach (Illuminate\Support\Arr::sort(array_keys(config('cfg.locales'))) as $loc)
        <label class="tw-flex tw-items-center tw-font-normal">
          <input
            class="tw-mr-2 {{ $errors->has('locale') ? 'is-invalid' : '' }}"
            type="radio"
            name="locale"
            value="{{ $loc }}"
            {{ old('locale', Auth::user()->locale ?: config('app.locale')) === $loc ? 'checked' : '' }}
          >
          {{ trans("locale.{$loc}") }}
        </label>
      @endforeach
      @if ($errors->has('locale'))
        <div class="invalid-feedback tw-block">{{ $errors->first('locale') }}</div>
      @endif
    </div>

    <label>{{ trans('my.mail_subscriptions') }}</label>
    <input type="hidden" name="notify_gigs" value="{{ App\User::NOTIFY_NO }}">
    <label class="tw-flex tw-items-center tw-font-normal">
      <input
        class="tw-mr-2 {{ $errors->has('notify_gigs') ? 'is-invalid' : '' }}"
        type="checkbox"
        name="notify_gigs"
        value="{{ App\User::NOTIFY_MAIL }}"
        {{ old('notify_gigs', Auth::user()->notify_gigs) ? 'checked' : '' }}
      >
      {{ trans('my.notify_gigs') }}
    </label>
    @if ($errors->has('notify_gigs'))
      <div class="invalid-feedback tw-block tw-mb-2">{{ $errors->first('notify_gigs') }}</div>
    @endif

    <input type="hidden" name="notify_news" value="{{ App\User::NOTIFY_NO }}">
    <label class="tw-flex tw-items-center tw-font-normal">
      <input
        class="tw-mr-2 {{ $errors->has('notify_news') ? 'is-invalid' : '' }}"
        type="checkbox"
        name="notify_news"
        value="{{ App\User::NOTIFY_MAIL }}"
        {{ old('notify_news', Auth::user()->notify_news) ? 'checked' : '' }}
      >
      {{ trans('my.notify_news') }}
    </label>
    @if ($errors->has('notify_news'))
      <div class="invalid-feedback tw-block tw-mb-2">{{ $errors->first('notify_news') }}</div>
    @endif

    <div class="tw-mb-4">
      <input type="hidden" name="notify_trips" value="{{ App\User::NOTIFY_NO }}">
      <label class="tw-flex tw-items-center tw-font-normal">
        <input
          class="tw-mr-2 {{ $errors->has('notify_trips') ? 'is-invalid' : '' }}"
          type="checkbox"
          name="notify_trips"
          value="{{ App\User::NOTIFY_MAIL }}"
          {{ old('notify_trips', Auth::user()->notify_trips) ? 'checked' : '' }}
        >
        {{ trans('my.notify_trips') }}
      </label>
      @if ($errors->has('notify_trips'))
        <div class="invalid-feedback tw-block tw-mb-2">{{ $errors->first('notify_trips') }}</div>
      @endif
    </div>

    <button class="btn btn-primary">
      {{ trans('my.save') }}
    </button>
  </form>
</div>
@endsection
