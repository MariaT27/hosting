@extends('dcpp.software', [
  'software_title' => trans('dcpp.greylinkdc'),
  'software' => [
    ['version' => '0.49', 'id' => 145, 'dl_suffix' => ''],
  ],
])

@section('download_latest')
<a class="btn btn-success" href="{{ action('Files@download', 145) }}">
  @svg (windows)
  {{ trans('dcpp.download') }} 32bit
  &middot;
  {{ ViewHelper::size(3006464) }}
</a>
&nbsp;
<a class="btn btn-success" href="{{ action('Files@download', 146) }}">
  @svg (windows)
  {{ trans('dcpp.download') }} 64bit
  &middot;
  {{ ViewHelper::size(4219940) }}
</a>
@ru
  &nbsp;
  <a class="btn btn-primary" href="{{ action('Files@download', 28) }}">
    Файл русификации
    &middot;
    {{ ViewHelper::size(108876) }}
  </a>
&nbsp;
  <a class="btn btn-default" href="{{ action('Dcpp@page', 'rus_setup') }}">Инструкция по русификации</a>
@endlang
@endsection

@section('about_software')
@ru
  <p><strong>GreyLinkDC++</strong> — очень удобная в использовании программа для файлообменных сетей, (использующая скачку непосредственно с компьютера на компьютер), уже полностью настроенная и готовая к использованию сразу после установки.</p>
  <p>В программу уже внесен список самых лучших хабов, обеспечивающих наивысшие скорости, настройка приоритетов. Нужно только указать логин, папки для скачки и закачки (файлообменная сеть, использующая скачку непосредственно с компьютера на компьютер), тем самым достигаются огромные скорости скачивания любых файлов, в том числе последних новинок. Используя данную программу можно скачать фильм размером около 700 мб за 1,5-2 часа не имея высокоскоростного интернета.</p>
  <h3>Основные преимущества</h3>
  <ul>
    <li>Улучшенная стабильность, низкое потребление ресурсов.</li>
    <li>Использование процессорного времени при нахождении на хабах с большим числом юзеров значительно ниже (в сравнении с другими клиентами). Потребление памяти также немного ниже.</li>
    <li>Восстановление недокачаных или повреждённых файлов. Из меню "Файл" выбирается "Восстановление файла", указывается правильный MAGNET-линк и расположение повреждённого файла.</li>
  </ul>
@en
  <p><strong>GreyLinkDC++</strong> is a stable and optimized DC++ client software.</p>
@endlang
@endsection
