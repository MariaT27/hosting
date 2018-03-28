@extends('base')

@section('content')
<h1 class="h3">{{ trans('my.mail_subscriptions') }}</h1>
<div class="life-text">
  @ru
    <p>Хотите узнавать о появлении новых историй о путешествиях, отчетов о посещенных концертах и новостей сайта сразу после их публикации? Именно для этого предназначена данная форма подписки. <a class="link" href="{{ path('Life@gigs') }}">Истории о концертах</a> появляются всего несколько раз в год — по числу посещенных шоу. Количество <a class="link" href="{{ path('Life@index') }}">заметок о путешествиях</a> может доходить и до 50 в год, то есть в среднем это одна публикация в неделю. Иногда бывают пики до трех публикаций в неделю после насыщенных поездок. <a class="link" href="{{ path('News@index') }}">Новости сайта</a> в среднем публикуются раз в месяц с историей обновлений за прошедший период. Иногда в новостях публикуются материалы о полезных сервисах и прочие мысли.</p>
    <p>После отправки формы вы получите письмо со ссылкой на подтверждение желания получать письма-уведомления. В дальнейшем каждая рассылка будет содержать ссылку на управление настройками подписки — отписаться можно будет буквально в несколько кликов.</p>
  @endru
</div>
<form class="mw-400" action="{{ path('Subscriptions@store') }}" method="post">
  {{ ViewHelper::inputHiddenMail() }}

  <div class="form-group">
    <input
      required
      class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
      type="email"
      name="email"
      value="{{ old('email') }}"
      placeholder="{{ trans('model.email') }}"
    >
    @if ($errors->has('email'))
      <div class="invalid-feedback">{{ $errors->first('email') }}</div>
    @endif
  </div>

  <input type="hidden" name="gigs" value="{{ App\User::NOTIFY_NO }}">
  <label class="form-check">
    <input
      class="form-check-input {{ $errors->has('gigs') ? 'is-invalid' : '' }}"
      type="checkbox"
      name="gigs"
      value="{{ App\User::NOTIFY_MAIL }}"
      {{ old('gigs', request('gigs')) ? 'checked' : '' }}
    >
    <span class="form-check-label">{{ trans('my.notify_gigs') }}</span>
  </label>
  @if ($errors->has('gigs'))
    <div class="invalid-feedback d-block mb-2">{{ $errors->first('gigs') }}</div>
  @endif

  <input type="hidden" name="news" value="{{ App\User::NOTIFY_NO }}">
  <label class="form-check">
    <input
      class="form-check-input {{ $errors->has('news') ? 'is-invalid' : '' }}"
      type="checkbox"
      name="news"
      value="{{ App\User::NOTIFY_MAIL }}"
      {{ old('news', request('news')) ? 'checked' : '' }}
    >
    <span class="form-check-label">{{ trans('my.notify_news') }}</span>
  </label>
  @if ($errors->has('news'))
    <div class="invalid-feedback d-block mb-2">{{ $errors->first('news') }}</div>
  @endif

  <div class="form-group">
    <input type="hidden" name="trips" value="{{ App\User::NOTIFY_NO }}">
    <label class="form-check">
      <input
        class="form-check-input {{ $errors->has('trips') ? 'is-invalid' : '' }}"
        type="checkbox"
        name="trips"
        value="{{ App\User::NOTIFY_MAIL }}"
        {{ old('trips', request('trips')) ? 'checked' : '' }}
      >
      <span class="form-check-label">{{ trans('my.notify_trips') }}</span>
    </label>
    @if ($errors->has('trips'))
      <div class="invalid-feedback d-block mb-2">{{ $errors->first('trips') }}</div>
    @endif
  </div>

  <button class="btn btn-primary text-capitalize">
    {{ trans('mail.subscribe') }}
  </button>

  @csrf
</form>
@endsection