@extends('life.base', [
  'meta_title' => 'Какими вещами и сервисами пользуюсь в путешествиях',
  'no_language_selector' => true,

  'breadcrumbs' => [
    ['title' => 'Заметки', 'url' => 'life'],
    ['title' => 'Чем пользуюсь в путешествиях'],
  ]
])

@section('content')
<h1 class="h2">Чем пользуюсь в путешествиях</h1>
<p>Золотая тройка вещей: паспорт, деньги и телефон. В телефоне <a class="link" href="/news/271">Дримсим</a> для интернета по всему миру по доступным ценам.</p>

<section>
  <h3>Мобильные приложения</h3>
  <div class="favorites-entry">
    2GIS
    <a href="https://play.google.com/store/apps/details?id=ru.dublgis.dgismobile" rel="nofollow">
      @svg (android)
    </a>
    <a href="https://itunes.apple.com/ru/app/2gis/id481627348?mt=8" rel="nofollow">
      @svg (apple)
    </a>
    — карты России, знают как работает общественный транспорт, после скачивания карт работают без интернета
  </div>
  <div class="favorites-entry">
    maps.me
    <a href="https://play.google.com/store/apps/details?id=com.mapswithme.maps.pro" rel="nofollow">
      @svg (android)
    </a>
    <a href="https://itunes.apple.com/ru/app/id510623322?mt=8" rel="nofollow">
      @svg (apple)
    </a>
    — карты всего мира, после скачивания карт работают без интернета
  </div>
</section>

<section>
  <h3>Навигация в городах</h3>
  <ul class="list-unstyled">
    <li>
      <a class="link" href="http://wikitravel.org" rel="nofollow">wikitravel.org</a>
      — как добраться до выбранного города, на что обратить внимание и многое другое
    </li>
  </ul>
</section>

<section>
  <h3>Выгодные предложения</h3>
  <ul class="list-unstyled">
    <li>
      <a class="link" href="https://vandrouki.ru/" rel="nofollow">vandrouki.ru</a>
      — преимущественно отправление из России
    </li>
    <li>
      <a class="link" href="http://travelfree.info/" rel="nofollow">travelfree.info</a>
      — предложения по всему миру
    </li>
  </ul>
</section>

<section>
  <h3>Авиабилеты</h3>
  <ul class="list-unstyled">
    <li><a class="link" href="https://www.aviasales.ru/?marker=79853">aviasales.ru</a></li>
    <li><a class="link" href="https://www.skyscanner.ru/" rel="nofollow">skyscanner.ru</a></li>
  </ul>
</section>

<section>
  <h3>Жилье</h3>
  <ul class="list-unstyled">
    <li>
      <a class="link" href="https://www.airbnb.ru/c/spankov1?s=8">airbnb.ru</a>
      — аренда квартир, комнат и домов у местных жителей
      {{--
      <a class="link" href="https://www.couchsurfing.com/" rel="nofollow">couchsurfing.com</a>
      — возможность бесплатно приютиться у местных
      --}}
    </li>
  </ul>
</section>

<section>
  <h3>Автобусы</h3>
  <ul class="list-unstyled">
    <li>
      <a class="link" href="https://www.busradar.com/" rel="nofollow">busradar.com</a>
      — начало поиска, а дальше уже покупка билетов на сайтах местных перевозчиков
    </li>
    <li>
      <a class="link" href="https://www.goeuro.com/" rel="nofollow">goeuro.com</a>
      — аналог предыдущего примера
    </li>
  </ul>
</section>

<section>
  <h3>Железнодорожное сообщение</h3>
  <ul class="list-unstyled">
    <li>
      <a class="link" href="https://pass.rzd.ru/" rel="nofollow">pass.rzd.ru</a>
      — Россия
    </li>
    <li>
      <a class="link" href="https://www.bahn.de/p_en/view/index.shtml" rel="nofollow">bahn.de</a>
      — Германия (предложения также видны на busradar.com)
    </li>
    <li>
      <a class="link" href="http://www.renfe.com/EN/viajeros/index.html" rel="nofollow">renfe.com</a>
      — Испания
    </li>
    <li>
      <a class="link" href="https://www.thalys.com/" rel="nofollow">thalys.com</a>
      — Европа
    </li>
    <li>
      <a class="link" href="http://www.seat61.com/" rel="nofollow">seat61.com</a>
      — советы по перемещениям на поездах
    </li>
  </ul>
</section>
@endsection
