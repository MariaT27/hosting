@extends('docs.base', [
  'meta_title' => 'Поездки &middot; Документация',

  'breadcrumbs' => [
    ['title' => 'Документация', 'url' => 'docs'],
    ['title' => 'Поездки'],
  ]
])

@section('content')
@component('accordion')
@slot('title')
Что это для ресурс?
@endslot

<p>Это сервис, позволяющий вести хронологию собственных поездок и писать заметки к ним. Лучше всего истории фиксировать по горячим следам, пока ярки воспоминания. С годами детали вылетят из памяти, а в письменном варианте останутся доступны.</p>
@endcomponent

@component('accordion')
@slot('title')
Для кого он?
@endslot

<p>Для всех, кто хочет запечатлеть памятные события жизни, а также поведать о них друзьям. Один раз пишешь — много раз пересылаешь.</p>
@endcomponent

@component('accordion')
@slot('title')
Как добавить поездку в хронологию?
@endslot

<p>В личном кабинете есть <a class="link" href="/my/trips">специальный раздел</a> для управления поездками. <a class="link" href="/my/trips/create">Страница добавления поездки</a>.</p>
@endcomponent

@component('accordion')
@slot('title')
Нужного мне города нет в списке. Что делать?
@endslot

<p>Обращайтесь в <a class="link" href="https://t.me/vacuum">Телеграме</a> или <a class="link" href="https://vk.com/ivacuum">ВК</a> — добавим по запросу.</p>
<p>Для работоспособности сайта важно, чтобы города и страны были заполнены особым образом (с английским переводом, указанием координат для карты и пр.), поэтому возможность добавления городов есть только у администрации.</p>
@endcomponent

@component('accordion')
@slot('title')
Что означают состояния поездок?
@endslot

<div class="h3 mt-0">Поездка скрыта</div>
<p>Никто не видит, кроме вас в личном кабинете. Полезно использовать в качестве наброска для планов, так как даты и последовательность перемещений будут у вас перед глазами.</p>

<div class="h3">Неактивна</div>
<p>Поездка видна пользователям в хронологии, но нельзя нажать на нее и посмотреть текст заметки.</p>
<p>Подходит для следующих ситуаций.</p>
<ul>
  <li>Нечего написать про давнюю поездку — в будущем мысли могут появиться, а пока поездка будет в хронологии и статистике посещений городов и стран.</li>
  <li>Поездка только-только состоялась — некое подобие анонса для постоянных читателей.</li>
</ul>

<div class="h3">Опубликована</div>
<p>На заметку все могут нажать и почитать. Разумеется, участвует в хронологии посещения городов и стран.</p>
@endcomponent

@component('accordion')
@slot('title')
Как вставить фотографию в текст?
@endslot

<p>Достаточно вставить ссылку на фото отдельной строкой. Если друг за другом вставить несколько ссылок каждую с новой строки, то при сохранении они преобразятся в горизонтальный слайдер.</p>
<p>В общем случае оформление текста заметки подобно следующему:</p>
<pre>Текст
Ссылка на фото

Текст
Ссылка на фото 1
Ссылка на фото 2</pre>
@endcomponent

@component('accordion')
@slot('title')
Какого размера фотографии лучше использовать?
@endslot

<p>Для мобильных устройств рекомендуемая ширина фотографии не более 1000px, для компьютеров — 2000px.</p>
@endcomponent

@component('accordion')
@slot('title')
Как показать друзьям где я был?
@endslot

@if (optional(Auth::user())->login)
  <p>Ссылка на вашу хронологию поездок: <a class="link" href="{{ action('UserTravelTrips@index', Auth::user()->login) }}"></a></p>
@else
  <p>Сначала укажите свой логин <a class="link" href="/my/profile">в профиле</a>.</p>
  <p>После этого на сайте у вас будет целый раздел вида <code>ivacuum.ru/@login/travel</code>. На него будет вести кнопка «Просмотреть» на странице <a class="link" href="/my/trips">управления поездками</a>.</p>
@endif
@endcomponent

@component('accordion')
@slot('title')
Есть пожелания по улучшению сервиса. Кому писать?
@endslot

<p>Для связи есть <a class="link" href="https://t.me/vacuum">Телеграм</a> и <a class="link" href="https://vk.com/ivacuum">ВК</a>.</p>
@endcomponent
@endsection