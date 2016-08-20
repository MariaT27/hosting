@extends('life.trips.base')

@section('content')
<p lang="ru">Раннее прибытие. Метро только открылось.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0039.jpg'])

<p lang="ru">На станции редкие люди.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0041.jpg'])

<p lang="ru">Новая тактика по заселению с помощью <a class="link" href="https://www.airbnb.com/c/spankov1?s=8">Airbnb</a> — снять отдельную комнату вместо целой квартиры. Выходит дешевле, общительнее и интересней. Рекомендую.</p>
<p lang="ru">Еще актуально пользоваться акцией РЖД <a class="link" href="http://pass.rzd.ru/static/portal/ru?STRUCTURE_ID=5316">удачный вторник</a>. Весной давали скидку 25-30% на верхние места в плацкарте. Также за 60 дней до отправления можно купить билет на Сапсан всего за 999 рублей.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0044.jpg'])

<p lang="ru">Отдельный турникет на станциях метро отдали под оплату касанием банковской картой. В отдельных троллейбусах бесконтактная оплата тоже вовсю тестируется.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0091.jpg'])

<p lang="ru">Пополнение коллекции фото табличек с фамилиями друзей.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0045.jpg'])

<p lang="ru">Два года назад в Юбилейном проходил концерт <a class="link" href="/life/dreamtheater.2014.spb">Дрим Театра</a>.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0047.jpg'])

<p lang="ru">А на малой арене Петровского стадиона в том же 2014 году играл Линкин Парк. На день позже выступление было <a class="link" href="/life/linkinpark.2014">в Москве</a>.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0064.jpg'])

<p lang="ru">После СПб в других городах недостает таблицы нумерации квартир по этажам.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0072.jpg'])

<p lang="ru">В этот раз больше времени было уделено Василеостровскому району.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0074.jpg'])

<p lang="ru">Как перестать отбрасывать тень.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0075.jpg'])

<p lang="ru">Случайный двор.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0069.jpg'])

<p lang="ru">Дороги.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0062.jpg',
  'IMG_0066.jpg',
  'IMG_0068.jpg',
  'IMG_0076.jpg',
  'IMG_0077.jpg',
  'IMG_0079.jpg',
  'IMG_0088.jpg',
  'IMG_0090.jpg',
]])

<p lang="ru">В таком виде знак легко принять за новый.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0078.jpg'])

<p lang="ru">Никаких оград.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0084.jpg'])

<p lang="ru">Никаких преград.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0083.jpg'])

<p lang="ru">Осталось загадкой почему тут тепло.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0080.jpg'])

<p lang="ru">А тут холодно.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0081.jpg'])

<p lang="ru">Теплое течение?</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0085.jpg'])

@include('tpl.airbnb_coupon', ['city' => 'Санкт-Петербурге', 'coupon' => 'POLOGNE2015'])
@endsection
