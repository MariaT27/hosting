@extends('life.base', [
  'meta_title' => 'Подкасты',

  'breadcrumbs' => [
    ['title' => 'Заметки', 'url' => 'life'],
    ['title' => 'Подкасты'],
  ]
])

@section('content')
<div class="h2">Подкасты</div>
<p>Ссылки на любимые передачи и их отдельные выпуски.</p>

<section>
  <div class="h2">Брендятина</div>
  <p>Истории брендов. Послушать можно в <a href="https://itunes.apple.com/ru/podcast/brendatina-istorii-brendov/id510731338?mt=2" class="link">iTunes</a> или <a href="http://brand.podfm.ru/" class="link">podfm.ru</a>.</p>
  <p>Любимые выпуски:</p>
  <ul>
    <li><a class="link" href="http://brand.podfm.ru/1270/">Twitter</a> #243</li>
    <li><a class="link" href="http://brand.podfm.ru/782/">Туполев</a> #204</li>
    <li><a class="link" href="http://brand.podfm.ru/102/">FedEx</a> #102</li>
  </ul>
</section>
@endsection
