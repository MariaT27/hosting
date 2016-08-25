@extends('life.trips.base')

@section('content')
<p lang="ru">Одинаковые машины, как на подбор.</p>
<p lang="en">Identical cars, like it was intended.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1263.jpg'])

<p lang="ru">Представим следующую ситуацию: приезжаем в Прагу на день-два, крон в кармане нет, банкомат предлагает снять тысячу одной купюрой, старый терминал по продаже билетов на общественный транспорт принимает только мелочь, а кассы с человеком, который принимает купюры и карты, есть далеко не на каждой станции метро. Выход есть! По городу стали появляться новые терминалы с возможностью безналичной оплаты. Например, несколько таких есть на главном железнодорожном вокзале.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1265.jpg'])

<p lang="ru">Откровение.</p>
<p lang="en">Revelation.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1270.jpg'])

<p lang="ru">Отличий от <a class="link" href="/life/prague.2015.12">зимы</a> достаточно мало. В основном это зеленые деревья.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1264.jpg'])

<p lang="ru">И легкая одежда на людях.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1278.jpg'])

<p lang="ru">Можно смело приезжать не в сезон. Зимой казалось, что реконструкций к лету много проводят. На самом деле строек и ремонтов летом в разы больше.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1275.jpg'])

<p lang="ru">Ах, да, световой день еще длиннее на несколько часов.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1282.jpg'])

<p lang="ru">В раннем детстве было бы приятно запутаться в этом зеленом лабиринте, он был бы чуть ли не по шею высотой.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1279.jpg'])

<p lang="ru">У Праги хорошее сообщение с Москвой. В моем случае из нее было вдвое дешевле вернуться в Москву, чем из Германии. И это Аэрофлотом!</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1293.jpg'])

<p lang="ru">Прогадал со ставкой на питание Аэрофлота, рейс же короткий — менее 3 часов. Дают всего лишь один бутерброд. В данном случае выгоднее было полететь чешскими авиалиниями, у них дешевле билет, но платное питание, заказываемое через сайт. В сумме по деньгам тоже самое, но еды куда больше досталось бы.</p>
@include('tpl.airbnb_coupon', ['city' => 'Праге', 'coupon' => 'PRAGUE2015'])
@endsection
