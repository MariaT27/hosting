@extends('life.gigs.base')

{{-- Yotaspace --}}

@section('content')
@ru
  <p>Новый тур группы Oomph! Это будет уже шестое выступление по счету в Москве. Сетлист будет известен вместе с первым концертом в Санкт-Петербурге 24 марта.</p>
  <p>В своем Фэйсбуке участники группы <a class="link" href="https://www.facebook.com/oomphband/videos/10154365026933803/">пообещали</a> исполнить одну песню, которая никогда не звучала на просторах СНГ. Также будет несколько песен в новой обработке. Без хитов публика тоже не останется.</p>
  <p>Ждем-с.</p>
  <p>
    <a class="btn btn-primary" href="https://ponominalu.ru/event/oomph">Купить билет</a>
    <a class="btn btn-default" href="https://vk.com/oomph_msk">Группа ВК</a>
    <a class="btn btn-default" href="https://www.treehouse-ticketing.com/cat/index/sCategory/95">Meet&Greet</a>
  </p>
@endlang
<div class="row">
  <div class="col-md-7">
    @include('tpl.setlist-title')
    <ol>
      <li>Das weisse Licht</li>
      <li>Gott ist ein Popstar</li>
      <li>Träumst Du</li>
      <li>Mein Schatz</li>
      <li>Der neue Gott</li>
      <li>Bis der Spiegel zerbricht</li>
      <li>Als wärs das letzte Mal</li>
      <li>Sandmann</li>
      <li>Gekreuzigt</li>
      <li>Jetzt oder nie</li>
      <li>
        Sex hat keine Macht
        <small class="text-muted">(Acoustic)</small>
      </li>
      <li>Jede Reise hat ein Ende</li>
      <li>Mein Herz</li>
      <li>Niemand</li>
      <li>Mitten ins Herz</li>
      <li>Aus meiner Haut</li>
      <li>Kleinstadtboy</li>
      <li>
        Fieber
        <small class="text-muted">(Acoustic)</small>
      </li>
      <li>
        Das letzte Streichholz
        <small class="text-muted">(Acoustic)</small>
      </li>
      <li>Labyrinth</li>
      <li>Augen auf!</li>
      <li>Alles aus Liebe</li>
      <li>Auf Kurs</li>
    </ol>
  </div>
  <div class="col-md-5">
    <div class="img-container">
      <img src="https://life.ivacuum.ru/gigs/oomph.2017.03.26.jpg">
    </div>
  </div>
</div>
@endsection
