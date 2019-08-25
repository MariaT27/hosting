@extends('base')

@section('content')
<div class="tw-mx-auto tw-max-w-400px">
  <h3 class="tw-mb-4">{{ trans('auth.password_reset_title') }}</h3>
  <form action="{{ path('Auth\ResetPassword@reset') }}" method="post">
    {{ ViewHelper::inputHiddenMail() }}
    @csrf

    <div class="tw-mb-4">
      <input
        autofocus
        required
        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
        type="email"
        name="email"
        value="{{ old('email') }}"
        autocomplete="email"
        placeholder="{{ trans('auth.email') }}"
      >
      <div class="invalid-feedback">{{ $errors->first('email') }}</div>
    </div>

    <div class="tw-mb-4">
      <input
        required
        class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
        type="password"
        name="password"
        autocomplete="new-password"
        placeholder="{{ trans('auth.new_password') }}"
      >
      <div class="invalid-feedback">{{ $errors->first('password') }}</div>
    </div>

    <button class="btn btn-primary btn-lg">
      {{ trans('auth.change_password') }}
    </button>

    <input type="hidden" name="token" value="{{ $token }}">
  </form>
</div>
@endsection
