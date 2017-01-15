@extends('life.trips.base')

@section('content')
@ru
  <p>В этот день впервые сыграл в <a class="link" href="http://phobia.ru/">Клаустрофобию</a> — квест, в котором за один час нужно выбраться из полной головоломок комнаты. Уничтожали <a class="link" href="http://phobia.ru/58/">опасное изобретение ученых</a> на Бауманской. Сделан очень достойно: звуки, эффекты, оформление, предметы — все погружает в атмосферу квеста. Рекомендую.</p>
  <p>Тогда же удалось оценить IMAX 2D — в прокат вышел Интерстеллар. Громкость там определенно выше, чем в традиционном зале, — сидения чуть ли не тряслись. Экран огромный, при этом сидишь на уровне верхней его части, если не выше. Эдакая арена с центром действия внизу. Было интересно, но в следующий раз скорей выбрал бы IMAX из-за 3D.</p>
  <p>Стало известно, что в Москве показывают фильмы в оригинале с субтитрами, что однозначно здорово, но показывают, как правило, лишь раз в день, да и сеансы вечерние, что не всегда удобно при краткосрочном визите. Также показывают фильмы в формате 4DX, в котором параллельно с видеорядом идет дорожка эффектов: двигаются кресла, разбрызгивается вода, вспыхивает свет, появляются пузыри.{{-- Подробнее и нагляднее в видеоролике ниже. --}}</p>
@endlang
{{--<youtube title="" v="tdJS_Icm6fw"></youtube>--}}

@ru
  <p>В столице пасмурно.</p>
@endlang
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_1324.jpg',
  'IMG_1325.jpg',
]])

@ru
  <p>В разных городах встречаются магазины с Якутскими алмазами, в самом <a class="link" href="/life/yakutsk">Якутске</a>, кстати, действует постоянная выставка <a href="http://expo-gx.ru/" class="link">Сокровищница Якутии</a>.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_1327.jpg'])

@ru
  <p>Вроде бы в снимке ничего особенного, но забавно позже встречать в жизни или прессе фотографии с того же ракурса и сравнивать их со своими. Так уже было с одним майским снимком улицы в Питере, практически копия которого попалась мне на выставке в Петергофе.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_1331.jpg'])

@ru
  <p>Или вот другой схожий случай.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_0429.jpg'])

@ru
  <p>Улица в столице.</p>
@en
  <p>Street in Moscow.</p>
@endlang
@include('tpl.pic-2x', ['pic' => 'IMG_1332.jpg'])

@ru
  <p>Попытка купить билет на поезд домой через интернет не увенчалась успехом. Опытным путем было установлено, что онлайн-продажа закрывается за час до отправления, дальше только в кассы. Похоже, что в это окошко проводники получают списки пассажиров с электронной регистрацией.</p>
@endlang
@endsection
