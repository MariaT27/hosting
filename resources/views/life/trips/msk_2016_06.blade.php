@extends('life.trips.base')

@section('content')
<p lang="ru">Главная цель визита — фестиваль <a class="link" href="/life/rammstein.2016.06">Максидром</a>.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0618.jpg'])

<p lang="ru">Попутно опробован <a class="link" href="http://pandapark.org/">веревочный парк</a> — прекрасная возможность полазать по переправам над землей.</p>

<p lang="ru">Современная Крымская набежерная.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0612.jpg'])

<p lang="ru">Есть где всегда укрыться в теньке.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0613.jpg'])

<p lang="ru">Плавно переходит в Парк Горького.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0614.jpg'])

<p lang="ru">Волны от проходящих судов омывают ступени.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0615.jpg'])

<p lang="ru">Лежаки вдоль Москвы-реки не простаивают.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0616.jpg'])

<p lang="ru">Куда прикладывать ключ от домофона? Ночью впритык к двери понадобилось не менее минуты, чтобы найти.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0619.jpg'])

<p lang="ru">Пешеходные пространства развиваются.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0623.jpg',
  'IMG_0626.jpg',
]])

<p lang="ru">Еще в <a class="link" href="/life/msk.2014.12#triumph">декабре 2014</a> Триумфальная площадь вовсю реконструировалась. Теперь она стала пешеходной. От желающих покачаться на качелях нет отбоя.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0627.jpg',
  'IMG_0628.jpg',
]])

<p lang="ru">Совершенно другие впечатления от Москвы, когда приезжаешь в нее на несколько дней. Нет спешки на вечерний транспорт, вещи оставлены дома. Позитива куда больше. Еще и мест погулять в центре значительно прибавляется с каждым годом.</p>
@include('tpl.airbnb_coupon', ['city' => 'Москве', 'coupon' => 'MOSCOU2015'])
@endsection
