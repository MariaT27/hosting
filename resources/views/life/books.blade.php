@extends('life.base', [
  'meta_title' => 'Понравившиеся книги',

  'breadcrumbs' => [
    ['title' => 'Заметки', 'url' => 'life'],
    ['title' => 'Понравившиеся книги'],
  ]
])

@section('content')
<h2>Понравившиеся книги</h2>
<ul>
  <li>
    <a class="link" href="http://www.ozon.ru/context/detail/id/19728054/">11/22/63</a>
    <span class="text-muted">[2013]</span>
  </li>
  <li>
    <a class="link" href="http://www.ozon.ru/context/detail/id/28788268/">Марсианин</a>
    <span class="text-muted">[2014]</span>
  </li>
</ul>
@endsection
