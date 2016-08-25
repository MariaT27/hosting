@extends('life.trips.base')

@section('content')
<p lang="ru">Неужели пустыня?</p>
<p lang="en">Desert? Really?</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0067.jpg'])

<p lang="ru">Фух, не.</p>
<p lang="en">Oof, no.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0091.jpg'])

{{--
<p lang="ru">Часто такое покрытие встречалось в самых разных городах. Для бега делают?</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0075.jpg'])
--}}

<p lang="ru">Лавки в любом городе найдутся, а вот стульчики на одного — редкость.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0096.jpg'])

<p lang="ru">Железнодорожная станция.</p>
<p lang="en">Railway station.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0178.jpg'])

<p lang="ru">Хорошо уложенные пути. На них в электричке нет типичного «ту-дух ту-дух», она двигается бесшумно и комфортно. На этом участке до следующей остановки поезд развивает скорость до 130 км/ч. Испанцы восхваляют свои железные дороги, особенно высокоскоростные. До Мадрида из Барселоны можно добраться менее чем за 3 часа — неплохо для шестисоткилометрового расстояния. Еще можно доехать до Парижа.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0077.jpg',
  'IMG_0078.jpg',
]])

<p lang="ru">Голосовые сообщения очень короткие: «следующая остановка такая-то». Все. Нет этих «уважаемые пассажиры, держитесь, пожалуйста, за поручни». Табло, как в поезде, так и на станции, загорается только при приближении поезда. Двери в составах полуавтоматические — открываются и внутри и снаружи по кнопке.</p>
<p lang="ru">Сами электрички хороши. С туалетом и кондиционером, местами для велосипедов и инвалидов.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0258.jpg',
  'IMG_0079.jpg',
  'IMG_0081.jpg',
]])

<p lang="ru">Машинист смотрит на дорогу через узкую щель. В солнцезащитных очках.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0260.jpg'])

<p lang="ru">На станции при необходимости из вагонов выезжает дополнительная ступенька.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0082.jpg'])

<p lang="ru">Автомат по продаже железнодорожных билетов. Renfe — название компании, rodalies — пригородное сообщение. Названия компаний помогают впоследствии найти их сайты и ознакомиться с вариантами логистики. Актуально фотографировать, например, автобусы, поезда и такси.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0184.jpg'])

<p lang="ru">Порой хорошо удаются снимки с множеством деталей. Акцент изначально здесь был на велосипеде с украденным передним колесом, но также видно название автобусной компании и зеркала для выезжающих из дворов водителей.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0080.jpg'])

<p lang="ru">Редкий трамвайчик.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0215.jpg'])

<p lang="ru">Красив его путь.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0216.jpg'])

<p lang="ru">Прекрасные здания.</p>
<p lang="en">Beautiful buildings.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0334.jpg',
  'IMG_0326.jpg',
  'IMG_0203.jpg',
  'IMG_0191.jpg',
  'IMG_0119.jpg',
  'IMG_0121.jpg',
]])

<p lang="ru">Подъем по длинной лестнице вознаграждается панорамным видом.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0297.jpg',
  'IMG_0299.jpg',
  'IMG_0300.jpg',
]])

<p lang="ru">Еще высотные виды.</p>
<p lang="en">More panoramic views.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0116.jpg',
  'IMG_0135.jpg',
]])

<p lang="ru">Неожиданно — футбольное поле на высоте.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0314.jpg'])

<p lang="ru">Спорту в городе отведено большое место.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0131.jpg'])

<p lang="ru">Особенно футболу. В мяч играют в любом удобном месте. Даже тут на дальнем плане.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0145.jpg'])

<a name="visor"></a>
<p lang="ru">Окна и балконы. Створки часто закрыты или прикрыты. Причем ткань на балконах одного цвета в пределах дома. Кондиционеры нельзя вешать на фасад здания, их можно разглядеть только внутри балконов.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0154.jpg',
  'IMG_0155.jpg',
  'IMG_0158.jpg',
  'IMG_0159.jpg',
  'IMG_0217.jpg',
]])

<p lang="ru">При заселении в гостиницу в Испании берут налог в зависимости от количества звезд у нее. В среднем это от 0,5 евро с человека в день за <code>3*</code> до 2,5 евро за <code>5*</code>. Цифры могут меняться в зависимости от региона и длительности проживания.</p>
<p lang="ru">Прозрачные подъезды.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0136.jpg',
  'IMG_0223.jpg',
]])

<p lang="ru">Мусорные баки выравнивают вдоль дороги. По высоте они выше легкового автомобиля. Некоторые баки можно открыть ногой, наступив на ручку внизу. Эти другой конструкции — без ручки.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0108.jpg'])

<p lang="ru">Для подъема наверх наряду со ступеньками и пандусами делают эскалаторы.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0142.jpg',
  'IMG_0114.jpg',
]])

<p lang="ru">Остановки.</p>
<p lang="en">Bus stops.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0163.jpg',
  'IMG_0102.jpg',
  'IMG_0213.jpg',
]])

<p lang="ru">Внезапно — попугаи на улице. На деревьях их сложно заметить, как и в траве.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0166.jpg'])

<p lang="ru">Почта.</p>
<p lang="en">Postbox.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0218.jpg'])

<p lang="ru">Набережная. Видно какой сильный ветер в Барселоне.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0232.jpg'])

<p lang="ru">По фонтанам тоже заметно. Можно подгадать, чтобы за счет ветра обдало прохладной водой.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0251.jpg',
  'IMG_0204.jpg',
]])

<p lang="ru">Еще от жары помогают спасаться питьевые фонтанчики. Достаточно одного нажатия на кнопку — вода будет литься около 10 секунд. Такая же система, например, в аэропорту. Удобно, что после нажатия обе руки свободны.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0283.jpg'])

<p lang="ru">Пляж.</p>
<p lang="en">Beach.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0234.jpg'])

<p lang="ru">Малоизвестный у нас <a class="link" href="http://tema.livejournal.com/1755711.html">знак парикмахерской</a>.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0323.jpg'])

<p lang="ru">Столб с солнечной панелью, как в <a class="link" href="/life/krasnodar.2016#sun_pole">Краснодаре</a>.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0288.jpg'])

<p lang="ru">Необычный жилой дом и городской прокат велосипедов.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0246.jpg'])

<p lang="ru">Антивандальное покрытие столба. Все равно умудряются прилепить рекламку.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0276.jpg'])

<p lang="ru">Автомат для оплаты парковки.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0267.jpg'])

<p lang="ru">Место для парковки мотоциклов и мопедов. Последних крайне много в городе — чуть ли не поровну с автомобилями.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0269.jpg'])

<p lang="ru">Цвет линий на асфальте имеет значение. Зеленый — жилые районы, выгодная парковка для резидентов.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0104.jpg',
  'IMG_0222.jpg',
  'IMG_0224.jpg',
]])

<p lang="ru">Синий — места платные в рабочее время. Перерыв на обед (сиеста) тут довольно длинный — 2–3 часа, которые парковка в этой зоне бесплатна. Но и заведения в это время закрыты.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0156.jpg'])

<p lang="ru">Дороги.</p>
<p lang="en">Roads.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0239.jpg',
  'IMG_0244.jpg',
  'IMG_0245.jpg',
  'IMG_0248.jpg',
  'IMG_0250.jpg',
  'IMG_0275.jpg',
  'IMG_0286.jpg',
  'IMG_0287.jpg',
  'IMG_0097.jpg',
  'IMG_0152.jpg',
  'IMG_0193.jpg',
  'IMG_0168.jpg',
  'IMG_0169.jpg',
  'IMG_0146.jpg',
  'IMG_0147.jpg',
  'IMG_0140.jpg',
]])

<p lang="ru">Вафля — запрещающая остановку на перекрестке разметка. Наглядное дополнение к ПДД.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0247.jpg'])

<p lang="ru">Заправка в центре города.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0329.jpg'])

<p lang="ru">Волнистый забор с интересной тенью.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0157.jpg'])

<p lang="ru">В общественном транспорте представляется наглядная возможность оценить разницу между языками. Справа вверху информация представлена сначала на каталонском, а затем на испанском. В городе встречается преимущественно один каталонский. Скачанный мною словарь испанского оказался бессилен. Впрочем, после десяти поездок на электричке понимаешь уже все объявления о них.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0339.jpg'])

<p lang="ru">Продукты местного производства имеют характерную черту — желтый ценник с надписью Producte local.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0340.jpg'])

<p lang="ru">Рынок.</p>
<p lang="en">Market.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0346.jpg'])

<p lang="ru">Ярмарка.</p>
<p lang="en">Fair.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0177.jpg'])

<p lang="ru">На углу дома табличка с названием улицы. Нумерация непосредственно над подъездами, так как у каждого свой номер. Почти как в <a class="link" href="/life/kaliningrad.2015#house_number">Калининграде</a>.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0294.jpg'])

<p lang="ru">Приятно погулять.</p>
<p lang="en">It's pleasure to walk.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0174.jpg',
  'IMG_0328.jpg',
  'IMG_0332.jpg',
  'IMG_0149.jpg',
  'IMG_0129.jpg',
  'IMG_0130.jpg',
]])

<p lang="ru">Напоследок несколько видео. Наслаждение смотреть 60 кадров в секунду.</p>
<p lang="ru">Как выглядит улица в центре.</p>
<div class="fotorama" data-width="1000" data-ratio="16/10">
  <a href="https://www.youtube.com/embed/bh5oaJbD_z8">Barcelona street, May 2016</a>
</div>

<p lang="ru">Аттракцион #1 в Порте Авентура неподалеку от Барселоны.</p>
<p lang="en">Attraction #1 in Port Aventura not so far away from Barcelona.</p>
<div class="fotorama" data-width="1000" data-ratio="16/10">
  <a href="https://www.youtube.com/embed/DqKHyp8IWyc">Port Aventura boats, June 2016</a>
</div>

<p lang="ru">Аттракцион #2.</p>
<p lang="en">Attraction #2.</p>
<div class="fotorama" data-width="1000" data-ratio="16/10">
  <a href="https://www.youtube.com/embed/UAXCpzBtnYM">Port Aventura splash, June 2016</a>
</div>

<p lang="ru">Видишь сову? Нет? А она есть.</p>
<p lang="en">Do you see an owl? No? Yet it's there.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0330.jpg'])
@endsection
