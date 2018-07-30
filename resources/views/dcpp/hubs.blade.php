@extends('dcpp.base')

@section('content')
<h1>{{ trans('meta_title.dcpp.hubs') }}</h1>
<div class="row">
  <div class="col-md-6">
    @ru
      <p>Итак, вы установили DC++ клиент и, наверное, уже задались вопросом куда же подключиться для обмена файлами? Подключиться нужно к хабу, можно даже сразу к нескольким. А выбрать хаб по нраву можно из списка ниже.</p>
    @en
      <p>So you have installed a DC++ client software. The next question is where to connect. To a hub! You can find our top-10 list of DC++ hubs below.</p>
    @endru

    <ol>
      @foreach ($hubs as $hub)
        <li>
          <a
            class="link js-dcpp-hub"
            href="{{ $hub->externalLink() }}"
            data-action="{{ path('DcppHubClick@store', $hub->id) }}"
          >{{ $hub->externalLink() }}</a>
        </li>
      @endforeach
    </ol>

    @ru
      <p>Обычно клика по названию хаба достаточно, чтобы подключиться. Однако, если клик не сработал должным образом, то вы можете скопировать адрес и добавить хаб вручную в своем DC++ клиенте.</p>
    @en
      <p>Usually, it is just enough to click a link to connect to a hub. However, if it didn't work for you, you can manually copy-paste the address into your DC++ client.</p>
    @endru

    <div class="h3 mt-5">{{ trans('issues.create') }}</div>
    @ru
      <p>Знаете хаб, достойный добавления в список? Пришлите его нам, чтобы мы пополнили страницу.</p>
    @en
      <p>Use the form below to send us new hubs or just to tell how to make this page better.</p>
    @endru
    <feedback-form
      email="{{ Auth::user()->email ?? '' }}"
      title="DC++ Hubs"
      action="{{ path('Issues@store') }}"
      hide-name
      hide-title
    ></feedback-form>
  </div>
  <div class="col-md-3">
    @if (App::environment() === 'production')
      <ins
        class="adsbygoogle d-block"
        data-ad-client="ca-pub-7802683087624570"
        data-ad-slot="3039258747"
        data-ad-format="auto"
        data-full-width-responsive="true"
      ></ins>
      <script>(adsbygoogle = window.adsbygoogle || []).push({})</script>
    @elseif (App::isLocal())
      <div class="bg-info text-white d-flex justify-content-center align-items-center">google-vertical</div>
    @endif
  </div>
</div>
@endsection
