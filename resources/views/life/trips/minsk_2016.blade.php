@extends('life.trips.base')

@section('content')
@ru
  <p>Беларусь — страна, в которой перед покупкой карты доступа к городскому вай-фаю просят паспорт. И переписывают его данные в журнал.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_2271.jpg'])

@ru
  <p>Здесь можно ненадолго почувствовать себя миллионером. Всего за 4 000 ₽.</p>
  <p>Обменный курс 1 к 250 быстро учит встречаемые цены делить на 1 000 и умножать на 4. Какой большой купюрой не решишь расплатиться, так все равно получишь еще больше бумажек сдачи. Минимальная купюра 100 рублей, монет нет — будут после деноминации.</p>
  <p>Больше всего в стране доставляет язык. Даже не столько буквальное написание слов вроде раён вместо район, сколько забавные слова. Например, в самолете: «пришпиливайте ремни», «не отшпиливайте, пожалуйста, ремни».</p>
  <p>Афиша театра. Царевна и кот определенно удались.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_2261.jpg'])

@ru
  <p>Внезапно.</p>
@en
  <p>All of the sudden.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_2253.jpg'])

@ru
  <p>Улицы.</p>
@en
  <p>Streets.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_2254.jpg',
  'IMG_2257.jpg',
  'IMG_2258.jpg',
  'IMG_2262.jpg',
]])

@ru
  <p>Ширина вполне подходящая для проезда трактора, но вот лавки требуют ручной чистки.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_2259.jpg'])

@ru
  <p>Делать в Минске суровой зимой оказалось ровным счетом нечего. Ничего не привлекало глаз на улицах.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_2250.jpg',
  'IMG_2251.jpg',
  'IMG_2252.jpg',
]])

@ru
  <p>Хорошо, что в это время проходил крупнейший в СНГ киберспортивный турнир <a class="link" href="http://starladder.com/">Старладдер</a>. Всего за 4 года ребята достигли впечатляющего уровня развития: многотысячная Минск-арена, трансляция чемпионата в реальном времени, комментирование на 3 языках, сотни тысяч зрителей в интернете. Для сравнения — в этом зале в 2015 году выступала группа Линкин Парк.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_2273.jpg',
  'IMG_2272.jpg',
]])

@ru
  <p>Ўсё.</p>
@endlang
@endsection
