@extends('life.trips.base')

@section('content')
@ru
  <p>В эту поездку были опробованы скоростные поезда Невский экспресс и Сапсан. Едут примерно одинаковое время, но первый дешевле.</p>
  <p>В экспрессе достался вагон первого класса купейного типа с сидячими местами. С каждого места есть доступ к столику. Однако спинку кресла не откинуть. Сапсан оказался комфортнее. Удивило, что нужно было не спинку откидывать назад, а <a href="https://www.youtube.com/watch?v=sN2qNCEn-ao" class="link">сиденьем ехать вперед</a>. Интересовался наличием розеток в эконом-классе. Конечно, несколько там есть — нужно же подключать куда-то тот же пылесос во время чистки вагона.</p>
  <p>В первый же вечер было решено направиться в IMAX 3D — показывали Стражей Галактики. Сам фильм хорош, а 3D так вообще на совершенно другом уровне по сравнению с таковым в традиционных кинотеатрах. Это стоит видеть собственными глазами.</p>
@endlang

@ru
  <p>Парк Победы в начале осени.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1063.jpg',
  'IMG_1064.jpg',
  'IMG_1066.jpg',
  'IMG_1068.jpg',
]])

@ru
  <p>Спортивно-концертный комплекс «Петербургский» — самая большая закрытая арена в Санкт-Петербурге, вмещает 25 тысяч человек. В СКК был уже дважды к этому моменту: тут играла <a href="/life/metallica.2008" class="link">Металлика</a> в 2008 году и <a href="/life/rammstein.2010" class="link">Раммштайн</a> в 2010.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_1067.jpg'])

@ru
  <p>Петергоф. Спонтанная поездка, около получаса был удивительно густой туман, который так же быстро исчез, как и появился. В Петергофе была выставка фотографий, на которой нашел снимок точь-в-точь похожий на сделанный мною <a href="/life/spb.2014.05#exhibition_photo" class="link">в мае</a>.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1072.jpg',
  'IMG_1073.jpg',
  'IMG_1087.jpg',
  'IMG_1115.jpg',
  'IMG_1122.jpg',
  'IMG_1127.jpg',
]])

@ru
  <p>Финский залив в тумане словно край мира.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1094.jpg',
  'IMG_1096.jpg',
  'IMG_1098.jpg',
  'IMG_1099.jpg',
  'IMG_1100.jpg',
  'IMG_1116.jpg',
]])

@ru
  <p>Как известно, люди не могли быть спасены во время теракта 11 сентября вертолетом из-за закрытых дверей на крыши башень-близнецов. Затем американцы учли опыт, стали открывать двери по всей стране. Однако, правительство СПб призывает их закрывать.</p>
@endlang
@include('tpl.pic-arbitrary', ['pic' => 'IMG_1062.jpg', 'w' => 563, 'h' => 750])

<a name="banana"></a>
@ru
  <p>Впервые попались маленькие бананы. Традиционные больше по вкусу.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_1183.jpg'])

@ru
  <p>И впервые покатался на трамвае. Мог это сделать еще в феврале, но тогда думал, что оплата проезда производится исключительно по транспортной карте, которую прикладывают к валидатору. Оказалось, что в дополнение к валидаторам всегда есть контролер с билетами — до автоматизации пока не дошли.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1187.jpg',
  'IMG_1203.jpg',
  'IMG_1206.jpg',
]])

@ru
  <p>В старом доме на Лиговском проспекте встретилась такая конструкция. <a class="pseudo" data-toggle="feedback" data-target=".js-modal-feedback" data-question="Зачем сооружена конструкция?">Зачем она могла быть сооружена?</a></p>
@endlang
@include('tpl.pic-arbitrary', ['pic' => 'IMG_1060.jpg', 'w' => 563, 'h' => 750])

@ru
  <p>Разглядывать улицы одно удовольствие.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1221.jpg',
  'IMG_1220.jpg',
]])
@endsection
