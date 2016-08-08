@extends('life.trips.base')

@section('content')
<p>На подъезде к городу почуял что-то неладное.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1088.jpg'])

<p>Здание вокзала.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1089.jpg'])

<p>Благо удалось его оперативно покинуть.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1090.jpg'])

<p>Одного пассажира все же недосчитались...</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1092.jpg'])

<p>Главная улица города.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1079.jpg'])

<p>Нашел горы! Песка.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1080.jpg'])

<p>И не только песка.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1082.jpg'])

<p>Русским тут не рады (см. табличку).</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1081.jpg'])
@include('tpl.pic-arbitrary', ['pic' => 'no-trespassing.jpg', 'w' => 307, 'h' => 240])

<p>Машине недолго осталось — пойдет на металлолом или запчасти.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1083.jpg'])

<p>Квартирка с балконом.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1086.jpg'])

<p>Лучший паб, он же ресторан, он же бар в округе.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1087.jpg'])

<p>На крайняк можно подзаправиться. Окрыляет не хуже редбула, так и пишут на козырьке.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1091.jpg'])

<p>Еще парковка одноразовая есть, подземная.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1095.jpg'])

<p>Тут прицепы сами ездят! Потому что могут.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1074.jpg'])

<p>Классный город, рекомендую!</p>

<p style="height: 15em;"></p>
<p class="text-center">* * * * *</p>
<p style="height: 15em;"></p>

<p>Подумали все плохо? Совсем не так. Поезд Thalys идет из Кельна всего порядка 20 минут. В пути бесплатный вай-фай. Для его активации просят ввести данные, на которые купил билет. Если забыл пароль, то можно восстановить. Как зайти в почту без активного интернета? Дают десять минут свободного доступа и после восстановления просят завершить сеанс и ввести данные своей учетки. Как тут перестать поражаться сколько всего построено на доверии? Билеты, однако, проверяют до посадки. Перевозчик — французская компания. Вероятно, другие правила. В билете также указаны вагон и место — близкая русскому человеку схема.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1004.jpg'])

<p>В Дюссельдорфе полно мест для прогулок.</p>
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1011.jpg',
  'IMG_1012.jpg',
  'IMG_1025.jpg',
  'IMG_1055.jpg',
  'IMG_1058.jpg',
  'IMG_1059.jpg',
  'IMG_1060.jpg',
  'IMG_1062.jpg',
  'IMG_1067.jpg',
  'IMG_1068.jpg',
  'IMG_1069.jpg',
  'IMG_1070.jpg',
]])

<p>Компактная машина чистит дороги. Может, и тротуары тоже, но застал только за чисткой дорог.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1014.jpg'])

<p>Белый трамвай еще не коснулась рука рекламщиков.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1017.jpg'])

<p>Предупреждение на асфальте о трамвае.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1023.jpg'])

<p>Трамвайные пути в зелени.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_1027.jpg',
  'IMG_1028.jpg',
  'IMG_1097.jpg',
  'IMG_1109.jpg',
  'IMG_1110.jpg',
]])

<p>Свадьба.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1044.jpg'])

<p>Рыбак в засаде, а вы что увидели?</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1071.jpg'])

<p>Зоркому читателю предлагается сосчитать количество запрещающих остановку и парковку знаков. Несложно заметить, что стрелками на знаках указывается направление запрета.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1020.jpg'])

<p>Все же небрежно автомобилисты относятся к тротуарам на этой улице.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1019.jpg'])

<p>На пути к парку.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1030.jpg'])

<p>В котором обитают утки и лебеди.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1034.jpg'])

<p>Кажется, он меня узнал и идет пожать <strike>лапу</strike> руку.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1036.jpg'])

<p>Видео из парка.</p>
<div class="fotorama" data-width="1000" data-ratio="16/10">
  <a href="https://www.youtube.com/embed/9zR1JGJTLJ4">Düsseldorf park, July 2016</a>
</div>

<p>Все на месте: прозрачный подъезд, велопарковка, почтовые ящики по фамилиям.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1098.jpg'])

<p>Дворик между домами.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1099.jpg'])

<p>Улицы.</p>
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1100.jpg',
  'IMG_1101.jpg',
  'IMG_1102.jpg',
  'IMG_1104.jpg',
  'IMG_1106.jpg',
  'IMG_1107.jpg',
  'IMG_1108.jpg',
  'IMG_1114.jpg',
  'IMG_1115.jpg',
]])

<p>Куда же без стекляшек.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1105.jpg'])

<p>Немалых размеров судно с ювелирной точностью прошло под автоматическим мостом. Около 10 минут заняла операция. Знак перед мостом просил автомобилистов ждать с заглушенным мотором — так и было.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_1075.jpg',
  'IMG_1077.jpg',
  'IMG_1078.jpg',
]])

<p>Интересный желтый знак светофора для пешеходов.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1117.jpg'])

<p>На схеме показано где какие вагоны окажутся на платформе после остановки состава. Мой поезд <abbr title="Hamburg-Köln-Express">HKX</abbr> 1805 относительно короткий. Отражение слева словно стрелка показывает на строчку с ним. А красная вертикальная линия показывает расположение стенда на платформе. Я как раз в нужном месте — напротив будет 6-й вагон. Несмотря на статус экспресса, билет до нужной станции можно купить у проводника после посадки.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_1121.jpg'])

<p>Объявления в поездах делают в основном на немецком. Исключение составляют аэропорты и крупные города — по ним дают краткую информацию на английском.</p>
<p>Оказалось, что очень даже немало можно увидеть в городе за три часа пешей прогулки.</p>
@endsection
