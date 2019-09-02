@extends('life.gigs.base')

{{-- Arena Moscow --}}

@section('content')
@ru
  <p>Немцам определенно в России понравилось. Выступления стали проходить даже в менее населенных городах нашей родины.</p>
@endru
<div class="md:flex md:-mx-4">
  <div class="mb-4 md:w-7/12 md:px-4">
    @include('tpl.setlist-title')
    <ol>
      <li>Unzerstörbar</li>
      <li>Labyrinth</li>
      <li>Mein Schatz</li>
      <li>Das weisse Licht</li>
      <li>Bis der Spiegel zerbricht</li>
      <li>Träumst Du</li>
      <li>Kleinstadtboy</li>
      <li>Mein Herz</li>
      <li>Der neue Gott</li>
      <li>Regen</li>
      <li>Niemand</li>
      <li>Gekreuzigt</li>
      <li>Seemannsrose</li>
      <li>Mitten ins Herz</li>
      <li>Auf Kurs</li>
      <li>Sex hat keine Macht</li>
      <li>Zwei Schritte Vor</li>
      <li>Sandmann</li>
      <li>Augen auf!</li>
      <li>Gott ist ein Popstar</li>
    </ol>
  </div>
  <div class="md:w-5/12 md:px-4">
    <div class="mb-6 text-center mobile-wide">
      <img class="sm:rounded" src="https://life.ivacuum.org/gigs/oomph.2013.10.19.jpg">
    </div>
  </div>
</div>

@ru
  <p>Видеозапись выступления.</p>
@endru
<youtube title="Oomph 2013, Moscow, Russia" v="RsLFgW-wsP0"></youtube>
@endsection
