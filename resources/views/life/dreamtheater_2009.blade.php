@extends('life.gigs.base', [
  'meta_title' => 'Dream Theater в Москве &middot; 10 июня 2009',
  'meta_description' => 'Заметки о концерте.',
  'meta_image' => 'https://life.ivacuum.ru/gigs/dreamtheater.2009.06.10.jpg',

  'breadcrumbs' => [
    ['title' => 'Заметки', 'url' => 'life'],
    ['title' => 'Концерты', 'url' => 'life/gigs'],
    ['title' => 'Dream Theater']
  ]
])

@section('content')
<h2>Dream Theater в Москве <small>10 июня 2009</small></h2>
<div class="row">
  <div class="col-md-7">
    <p lang="ru">Первое выступление группы в России. Билет на шоу купил еще в феврале-марте. Затем выяснилось, что концерт выпал на один день со сложным экзаменом. Последний было решено пропустить и затем пересдать, концерт-то не перенесешь.</p>
    <p lang="ru">На кой-то фиг уже в одиннадцатом часу утра (Тёма, привет!) я был у места проведения концерта, где, однако, уже расположились ребята, приехавшие еще раньше на поезде из Питера. Двери открыли не раньше 18:00, время удалось скоротать с вышеупомянутыми ребятами. Какая была публика у играющей с начала восьмидесятых группы? Относительно молодая, мне на тот момент было девятнадцать. Обсуждали кто где Дрим Театр впервые услышал, какие любимые альбомы. Мне впервые попалась их <a href="https://www.youtube.com/watch?v=kx1zhwHlj4o" class="link">песня Panic Attack в игре Rock Band</a>, для гитары она была на самом высоком уровне сложности. Сложность и зацепила. Затем достал остальные альбомы. Песни воспринимались тяжело, многие длились более десяти минут и совершенно не укладывались в голове.</p>
  </div>
  <div class="col-md-5">
    <div class="img-container">
      <img src="//life.ivacuum.ru/gigs/dreamtheater.2009.06.10.jpg">
    </div>
  </div>
</div>

<p lang="ru">Что играли:</p>
<ol>
  <li>In the Presence of Enemies Pt. 1</li>
  <li>Beyond This Life</li>
  <li>Take the Time</li>
  <li>A Rite of Passage</li>
  <li>Hollow Years</li>
  <li>Panic Attack</li>
  <li>Erotomania</li>
  <li>Voices</li>
  <li>Solitary Shell</li>
  <li>Constant Motion</li>
  <li>The Spirit Carries On</li>
  <li>As I Am</li>
  <li>Pull Me Under</li>
  <li>Metropolis Pt. 1 / Learning to Live / A Change of Seasons</li>
</ol>

<p lang="ru">На пятой минуте шоу понял, что сорву голос, если не перестану орать, а ведь еще не начались слова!</p>

<p lang="ru">Видеозапись выступления:</p>
<div class="fotorama" data-width="1280" data-ratio="16/10">
  <a href="https://www.youtube.com/watch?v=eDqIfvtmalM"></a>
</div>

@include('life.timeline.dreamtheater')
@endsection
