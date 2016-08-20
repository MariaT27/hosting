@extends('life.trips.base')

@section('content')
<p lang="ru">Всего несколько часов на автобусе отделяют Гамбург от Берлина. Удобно, что для посадки достаточно показать qr-код с экрана телефона. Бумажные билеты на транспорт ни разу не пригодились в Германии. Лучше всего поставить мобильные приложения соответствующих транспортных служб, чтобы без интернета иметь доступ к билетам и времени отправления/прибытия. Еще будут приходить уведомления об изменениях в расписании вашего рейса.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0767.jpg'])

<p lang="ru">Количество свободных мест на парковках.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0769.jpg'])

<p lang="ru">Пешеход стоит на велосипеде.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0778.jpg'])

<p lang="ru">Территорию ремонтных работ по всей Германии ограждают одинаковыми красно-белыми заборчиками.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0780.jpg'])

<p lang="ru">Жилой район.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0798.jpg'])

<p lang="ru">Более зеленая его часть.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0799.jpg'])

<p lang="ru">Обилие велосипедов.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0797.jpg'])

<p lang="ru">Возможность их пристегнуть.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0897.jpg'])

<p lang="ru">Дома и здания.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0805.jpg',
  'IMG_0806.jpg',
  'IMG_0770.jpg',
  'IMG_0774.jpg',
  'IMG_0796.jpg',
  'IMG_0843.jpg',
  'IMG_0896.jpg',
]])

<p lang="ru">Парк в жилом секторе.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0809.jpg'])

<p lang="ru">Он же на видео.</p>
<div class="fotorama" data-width="1000" data-ratio="16/10">
  <a href="https://www.youtube.com/embed/pUyNgQVl_H0">Hamburg street, July 2016</a>
</div>

<p lang="ru">Дороги.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0768.jpg',
  'IMG_0795.jpg',
  'IMG_0800.jpg',
  'IMG_0801.jpg',
  'IMG_0802.jpg',
  'IMG_0803.jpg',
  'IMG_0811.jpg',
  'IMG_0812.jpg',
  'IMG_0845.jpg',
  'IMG_0846.jpg',
]])

<p lang="ru">Один из перекрестков на видео.</p>
<div class="fotorama" data-width="1000" data-ratio="16/10">
  <a href="https://www.youtube.com/embed/v6E6t12z0dU">Hamburg street, July 2016</a>
</div>

<p lang="ru">Поезда.</p>
@include('tpl.fotorama', ['pics' => [
  'IMG_0892.jpg',
  'IMG_0894.jpg',
]])

<p lang="ru">На троутарах тоже паркуются.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0899.jpg'])

<p lang="ru">Невероятный парк Planten un Blomen. Чтоб у нас такие ухоженные места были! Он занимает большую площадь и поделен на множество тематических зон.</p>
@include('tpl.fotorama-2x', ['pics' => [
  'IMG_0781.jpg',
  'IMG_0782.jpg',
  'IMG_0783.jpg',
  'IMG_0784.jpg',
  'IMG_0785.jpg',
  'IMG_0786.jpg',
  'IMG_0787.jpg',
  'IMG_0788.jpg',
  'IMG_0789.jpg',
  'IMG_0791.jpg',
  'IMG_0850.jpg',
  'IMG_0851.jpg',
  'IMG_0852.jpg',
  'IMG_0853.jpg',
  'IMG_0856.jpg',
  'IMG_0860.jpg',
  'IMG_0861.jpg',
  'IMG_0862.jpg',
  'IMG_0863.jpg',
  'IMG_0867.jpg',
  'IMG_0868.jpg',
  'IMG_0869.jpg',
  'IMG_0870.jpg',
  'IMG_0872.jpg',
  'IMG_0874.jpg',
  'IMG_0875.jpg',
  'IMG_0885.jpg',
  'IMG_0888.jpg',
  'IMG_0889.jpg',
]])

<p lang="ru">Прикрытый зеленью вход в метро.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0790.jpg'])

<p lang="ru">Место животным пройтись и охладиться.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0792.jpg'])

<p lang="ru">Рядом с парком тоже красота.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0793.jpg'])

<p lang="ru">Здания одно круче другого.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0794.jpg'])

<p lang="ru">Искусно сделанная ливневая канализация.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0848.jpg'])

<p lang="ru">Край делают ниже, чтобы вода стекала в него с дороги и попадала в ливневку. А ведь только недавно шел дождь.</p>
<p lang="ru">Еще интересное название улицы на указателе.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0849.jpg'])

<p lang="ru">Железная дорога над головой так и подначивает подумать, что оказался в Нью-Йорке.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0813.jpg'])

<p lang="ru">По ней ходит с-бан — городская электричка.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0814.jpg'])

<p lang="ru">А рядом порт.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0817.jpg'])

<p lang="ru">И ходят судна.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0815.jpg'])

<p lang="ru">И стоят судна.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0818.jpg'])

<p lang="ru">Чумовой район Hafencity.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0824.jpg'])

<p lang="ru">На каждой улице открывается новый вид.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0823.jpg'])

<p lang="ru">Будто прыгаешь то на десятилетия назад, то на десятилетия вперед.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0822.jpg'])

<p lang="ru">Или оказываешься в напоминающей фильм <a class="link" href="https://www.kinopoisk.ru/film/447301/">Начало</a> обстановке.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0821.jpg'])

<p lang="ru">Плетеная мебель напоминает как удобно в ней располагаться в калужском пабе. Здесь и большая компания поместится, и дождь не помеха, и вид на Эльбу — лепота.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0825.jpg'])

<p lang="ru">Баскетбольная площадка с классным прорезиненым покрытием. Впрочем, у велосипедистов в правом нижнем углу уже нет сил на игру.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0826.jpg'])

<p lang="ru">Атмосферы фотографиям добавляет минимальное количество людей в вечер понедельника.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0827.jpg'])

<p lang="ru">И заходящее солнце.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0828.jpg'])

<p lang="ru">Снова минимум людей.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0829.jpg'])

<p lang="ru">Снова солнце.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0833.jpg'])

<p lang="ru">Выставка картин.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0832.jpg'])

<p lang="ru">Светофор для редкого пешехода.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0834.jpg'])

<p lang="ru">Здания разных эпох по обе стороны дороги.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0839.jpg'])

<p lang="ru">Прекрасное место для прогулки и несчетное количество стульев. Прямо за стеной еще одна хорошая и крохотная баскетбольная площадка. Самый кайф, что есть столики, которые в России продолжают исчезать из дворов и парков.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0837.jpg'])

<p lang="ru">Не переставал задаваться вопросом: «Что ж тут так красиво?».</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0842.jpg'])

<p lang="ru">Можно ли смело и без особых раздумий отправляться в другие портовые города?</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0844.jpg'])

<p lang="ru">Вода вокруг города и внутри него однозначно плюс.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0838.jpg'])

<p lang="ru">Но на воде плюсы Гамбурга не заканчиваются.</p>
@include('tpl.pic-2x', ['pic' => 'IMG_0898.jpg'])

<p lang="ru">Сложно поверить, пока не увидишь собственными глазами, что такая концентрация красот может приходиться на пятичасовую прогулку.</p>
@include('tpl.airbnb_coupon', ['city' => 'Гамбурге', 'coupon' => 'ALSACE2015'])
@endsection
