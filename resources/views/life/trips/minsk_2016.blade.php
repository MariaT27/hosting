@extends('life.trips.base')

@section('content')
<p lang="ru">Белоруссия — страна, в которой перед покупкой карты доступа к городскому вай-фаю просят паспорт. И переписывают его данные в журнал.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_2271.jpg'])

<p lang="ru">Здесь можно ненадолго почувствовать себя миллионером. Всего за 4 000 <span class="rur">руб.</span>.</p>
<p lang="ru">Обменный курс 1 к 250 быстро учит встречаемые цены делить на 1 000 и умножать на 4. Какой большой купюрой не решишь расплатиться, так все равно получишь еще больше бумажек сдачи. Минимальная купюра 100 рублей, монет нет — будут после деноминации.</p>
<p lang="ru">Больше всего в стране доставляет язык. Даже не столько буквальное написание слов вроде раён вместо район, сколько забавные слова. Например, в самолете: «пришпиливайте ремни», «не отшпиливайте, пожалуйста, ремни».</p>
<p lang="ru">Афиша театра. Царевна и кот определенно удались.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_2261.jpg'])

<p lang="ru">Внезапно.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_2253.jpg'])

<p lang="ru">Улицы.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_2254.jpg',
  'IMG_2257.jpg',
  'IMG_2258.jpg',
  'IMG_2262.jpg',
]])

<p lang="ru">Ширина вполне подходящая для проезда трактора, но вот лавки требуют ручной чистки.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_2259.jpg'])

<p lang="ru">Делать в Минске суровой зимой оказалось ровным счетом нечего. Ничего не привлекало глаз на улицах.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_2250.jpg',
  'IMG_2251.jpg',
  'IMG_2252.jpg',
]])

<p lang="ru">Хорошо, что в это время проходил крупнейший в СНГ киберспортивный турнир <a class="link" href="http://starladder.com/">Старладдер</a>. Всего за 4 года ребята достигли впечатляющего уровня развития: многотысячная Минск-арена, трансляция чемпионата в реальном времени, комментирование на 3 языках, сотни тысяч зрителей в интернете. Для сравнения — в этом зале в 2015 году выступала группа Линкин Парк.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_2273.jpg',
  'IMG_2272.jpg',
]])

<p lang="ru">Усё.</p>
@endsection
