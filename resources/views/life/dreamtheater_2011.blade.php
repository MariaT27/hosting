@extends('life.base', [
  'meta_title' => 'Dream Theater в Москве &middot; 12 июля 2011',
  'meta_description' => 'Заметки о концерте.',
  'meta_image' => 'https://life.ivacuum.ru/gigs/dreamtheater.2011.07.12.jpg',

  'breadcrumbs' => [
    ['title' => 'Заметки', 'url' => 'life'],
    ['title' => 'Концерты', 'url' => 'life/gigs'],
    ['title' => 'Dream Theater']
  ]
])

@section('content')
<h2>Dream Theater в Москве <small>12 июля 2011</small></h2>
<div class="row">
  <div class="col-md-7">
    <p>Что играли:</p>
    <ol>
      <li>Under a Glass Moon</li>
      <li>These Walls</li>
      <li>Forsaken</li>
      <li>Endless Sacrifice</li>
      <li>Drum Solo</li>
      <li>The Ytse Jam</li>
      <li>Peruvian Skies</li>
      <li>The Great Debate</li>
      <li>On the Backs of Angels</li>
      <li>Happy Birthday <small class="text-muted">(Mildred J. Hill cover) (to John Petrucci)</small></li>
      <li>Caught in a Web</li>
      <li>Through My Words</li>
      <li>Fatal Tragedy</li>
      <li>The Count of Tuscany</li>
      <li>Learning to Live</li>
    </ol>
  </div>
  <div class="col-md-5">
    <div class="img-container">
      <img src="//life.ivacuum.ru/gigs/dreamtheater.2011.07.12.jpg">
    </div>
  </div>
</div>

@include('life.timeline.dreamtheater')
@endsection
