@if (!Request::pjax())
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
  <meta charset="utf-8">
@endif
  <title>{{ ViewHelper::metaTitle($meta_title ?? '', $view) }}</title>
@if (!Request::pjax())
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="x-pjax-version" content="2">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="{{ $meta_keywords or '' }}">
  <meta name="description" content="{{ $meta_description or '' }}">
  <link rel="apple-touch-icon-precomposed" href="https://life.ivacuum.ru/apple-touch-icon-precomposed.png">
  <link rel="icon" href="https://life.ivacuum.ru/apple-touch-icon.png">
  <link rel="stylesheet" href="{{ mix('/build/fotorama.css') }}">
  <link rel="stylesheet" href="{{ mix('/build/app.css') }}">
  @stack('head')
</head>
<body>
<div class="navbar navbar-default {{ App::environment('local') ? 'navbar-inverse' : '' }}">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @section('brand')
        <a class="navbar-brand" href="{{ action('Home@index') }}">{{ config('cfg.sitename') }}</a>
      @show
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        @section('global_menu')
          <li>
            <a class="{{ $self == 'Life' ? 'navbar-selected' : '' }}" href="{{ action('Life@index') }}">
              {{ trans('menu.life') }}
            </a>
          </li>
          <li>
            <a class="{{ $self == 'News' ? 'navbar-selected' : '' }}" href="{{ action('News@index') }}">
              {{ trans('news.index') }}
            </a>
          </li>
          <li>
            <a class="{{ $self == 'Torrents' ? 'navbar-selected' : '' }}" href="{{ action('Torrents@index') }}">
              {{ trans('menu.torrents') }}
            </a>
          </li>
        @show
      </ul>
      @yield('header_form')
      <ul class="nav navbar-nav navbar-right">
        <li>
          @ru
            <a href="{{ url("en/{$request_uri}") }}" lang="en">In english</a>
          @en
            <a href="{{ url($request_uri) }}" lang="ru">По-русски</a>
          @endlang
        </li>
        {{--
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{ trans('menu.language') }}
            <b class="caret"></b>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{ url("en/{$request_uri}") }}" lang="en">English</a></li>
            <li><a href="{{ url($request_uri) }}" lang="ru">Русский</a></li>
          </ul>
        </li>
        --}}
        @section('header_user')
          @if (Auth::check())
            <li>
              <a class="tooltipped tooltipped-s {{ $self == 'Notifications' ? 'navbar-selected' : '' }}" href="{{ action('Notifications@index') }}" aria-label="{{ trans('notifications.index') }}">
                @svg (bell)
                <span class="counter-label">{{ !is_null(Auth::user()->unreadNotifications()->first()) ? '!' : '' }}</span>
              </a>
            </li>
            @if (!starts_with($self, 'Acp\\'))
              @if (Auth::user()->isAdmin())
                <li>
                  <a href="{{ App::environment('local') ? "{$locale_uri}/acp/dev/templates" : "{$locale_uri}/acp/trips" }}">
                    @svg (dashboard)
                  </a>
                </li>
              @endif
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->displayName() }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{ action('Auth@logout') }}">
                      {{ trans('menu.logout') }}
                    </a>
                  </li>
                </ul>
              </li>
            @endif
          @else
            <li>
              <a href="{{ action('Auth@login') }}">{{ trans('auth.signin') }}</a>
            </li>
            {{--
            <form class="navbar-form navbar-right">
              <a class="btn btn-default" href="{{ action('Auth@login') }}">{{ trans('auth.signin') }}</a>
            </form>
            --}}
          @endif
        @show
      </ul>
    </div>
  </div>
</div>
<div class="container-full">
<div class="container">
@section('breadcrumbs')
@include('tpl.breadcrumbs', ['breadcrumbs' => $breadcrumbs ?? Breadcrumbs::get()])
@show

@if (Session::has('message'))
  <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<div id="pjax_container">
@endif
@yield('content_header')
@yield('content')
@yield('content_footer')
@if (!Request::pjax())
</div>
</div>
</div>
<footer>
  <div class="container">
    @section('footer')
      <ul class="list-inline">
        <li>&copy; {{ date('Y') }} vacuum</li>
        <li>&middot;</li>
        <li>
          <a class="link" href="mailto:{{ config('email.support') }}">
            {{ trans('menu.feedback') }}
          </a>
        </li>
        <li>
          <a class="link" href="https://vk.com/ivacuum">
            {{ trans('menu.vk') }}
          </a>
        </li>
        <li class="hidden-xs">
          <a class="link" href="https://www.instagram.com/ivacuum">
            {{ trans('menu.instagram') }}
          </a>
        </li>
      </ul>
    @show
  </div>
</footer>
<script>
<?php echo 'window.AppOptions = ' . json_encode([
  'locale' => $locale,
  'loggedIn' => Auth::check(),
  'csrfToken' => csrf_token(),
  'yandexMetrikaId' => 5266444,
]); ?>
</script>
<script src="{{ mix('/build/manifest.js') }}"></script>
<script src="{{ mix('/build/polyfills.js') }}"></script>
<script src="{{ mix('/build/jquery.js') }}"></script>
<script src="{{ mix('/build/autosize.js') }}"></script>
<script src="{{ mix('/build/floatthead.js') }}"></script>
<script src="{{ mix('/build/bootstrap.js') }}"></script>
<script src="{{ mix('/build/throttle.js') }}"></script>
<script src="{{ mix('/build/vue.js') }}"></script>
<script src="{{ mix('/build/axios.js') }}"></script>
<script src="{{ mix('/build/app.js') }}"></script>
@stack('js')
@section('counters')
@include('tpl.counters')
@show
</body>
</html>
@endif
