@extends('life.base', [
  'meta_title' => 'Metallica в Санкт-Петербурге &middot; 18 июля 2008',
  'meta_description' => 'Заметки о концерте.',
  'meta_image' => 'https://life.ivacuum.ru/gigs/metallica.2008.07.18.jpg',

  'breadcrumbs' => [
    ['title' => 'Заметки', 'url' => 'life'],
    ['title' => 'Концерты', 'url' => 'life/gigs'],
    ['title' => 'Metallica']
  ]
])

@section('content')
<h2>Metallica в Санкт-Петербурге <small>18 июля 2008</small></h2>
<div class="row">
  <div class="col-md-7">
    <p>Что играли:</p>
    <ol>
      <li>Creeping Death</li>
      <li>For Whom the Bell Tolls</li>
      <li>Ride the Lightning</li>
      <li>Harvester of Sorrow <small class="text-muted">(followed by Kirk's solo incl. The Sails of Charon)</small></li>
      <li>The Unforgiven <small class="text-muted">(w/ acoustic The Call of Ktulu intro)</small></li>
      <li>Leper Messiah</li>
      <li>...And Justice for All</li>
      <li>No Remorse</li>
      <li>Fade to Black</li>
      <li>Master of Puppets</li>
      <li>Whiplash</li>
      <li>Nothing Else Matters</li>
      <li>Sad But True</li>
      <li>One</li>
      <li>Enter Sandman</li>
      <li>Last Caress <small class="text-muted">(Misfits cover)</small></li>
      <li>Motorbreath</li>
      <li>Seek &amp; Destroy <small class="text-muted">(w/ Let There Be Rock outro)</small></li>
    </ol>
  </div>
  <div class="col-md-5">
    <div class="img-container">
      <img src="//life.ivacuum.ru/gigs/metallica.2008.07.18.jpg">
    </div>
  </div>
</div>

<p>Видеозаписи концерта:</p>
<div class="fotorama" data-width="720" data-ratio="16/10">
  <a href="https://www.youtube.com/watch?v=s3l5cyVLrTs"></a>
  <a href="https://vk.com/video_ext.php?oid=169906990&id=162953982&hash=598cee4929696e81&hd=1" data-video="true">
    <img src="https://pp.vk.me/c527523/u169906990/video/l_65e47bb1.jpg">
  </a>
  <a href="https://www.youtube.com/watch?v=J1pyT7G5dhY"></a>
</div>

@include('life.timeline.metallica')
@endsection
