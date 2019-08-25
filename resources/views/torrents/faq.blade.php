@extends('torrents.base')

@section('content')
<div class="tw-max-w-700px">
  @component('accordion')
    @slot('title')
      Что это за ресурс?
    @endslot

    <p>Сайт, на котором можно скачать раздачи rutracker.org с помощью магнет-ссылок. Преимущество ссылок в отсутствии необходимости регистрироваться для скачивания.</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Для кого он?
    @endslot

    <p>Главным образом для тех, кто хочет делиться находками на рутрекере, а также следить за обновлениями раздач на нем.</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Чем отличается от других торрент-трекеров?
    @endslot

    <p>Тем, что для добавления раздачи достаточно вставить ссылку на нее. Где еще можно добавить 5-10 раздач за минуту?</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Как скачать раздачу?
    @endslot

    <p>По клику на иконку @svg (magnet) в списке раздач, либо на кнопку «Скачать» на странице раздачи. Качать можно без регистрации. Ваш торрент-клиент должен поддерживать магнет-ссылки.</p>
    <div class="tw-mb-1">Рекомендуемые клиенты:</div>
    <ul>
      <li>qBittorrent</li>
      <li>Deluge</li>
      <li>
        <a class="link" href="{{ path('Files@download', 151) }}">Transmission</a>
        <span title="macOS">
          @svg (apple)
        </span>
      </li>
      <li>
        <a class="link" href="{{ path('Files@download', 150) }}">uTorrent</a>
        <span title="Windows">
          @svg (windows)
        </span>
      </li>
    </ul>
  @endcomponent

  @component('accordion')
    @slot('title')
      Почему в торрент-клиенте сразу не видно список файлов раздачи?
    @endslot

    <p>Вашему торрент-клиенту нужно время, чтобы получить список файлов раздачи. Обычно этот процесс занимает не более минуты. Дело в том, что торрент-клиент по магнет-ссылке запрашивает у других участников обмена торрент-файл. Именно торрент-файл содержит список файлов, после его получения начинается действительное скачивание раздачи.</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Как добавить раздачу?
    @endslot

    <p>Для добавления предусмотрена <a class="link" href="{{ path('Torrents@create') }}">отдельная страница</a>, доступная только зарегистрированным пользователям. В качестве ввода принимается три типа значений:</p>
    <ol>
      <li>Ссылка на раздачу на рутрекере вида <code>http://rutracker.org/forum/<wbr>viewtopic.php?t=4031882</code>. Также поддерживаются адреса rutracker.cr, rutracker.net, rutracker.nl и maintracker.org</li>
      <li>Инфо-хэш раздачи вида <code>9B5D85FFC234737E7D7C<wbr>246FECB6BB1EC5E8F0B9</code></li>
      <li>Номер темы на рутрекере вида <code>4031882</code></li>
    </ol>
  @endcomponent

  @component('accordion')
    @slot('title')
      Какую учетную запись использовать для входа?
    @endslot

    <p>Ту, что заводили на сайте <code>ivacuum.ru</code>. Если вы хоть раз загружали картинки в галерею, то у вас есть эта учетка. От прежнего трекера <code>t.ivacuum.ru</code> учетные записи, к сожалению, не подходят. Если вам нужна помощь, чтобы найти свою учетку, созданные многие годы назад (во времена провайдера Спарк, например), то напишите мне в личку в <a class="link" href="https://vk.com/ivacuum">ВК</a> — постараемся ее найти.</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Как добавить раздачу, которой нет на рутрекере?
    @endslot

    <p>Сперва добавить ее на рутрекер, а потом указать ссылку на нее.</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Как обновить раздачу?
    @endslot

    <p>Ручное редактирование на данный момент не предусмотрено. Обновление раздачи автоматически происходит каждые шесть часов по ссылке, которая использовалась при ее добавлении.</p>
  @endcomponent

  {{--
  @component('accordion')
    @slot('title')
      Кто такой сид?
    @endslot

    <p>Источник, с которого можно скачать раздачу целиком. Чем больше сидов, тем быстрее происходит обмен данными и, соответственно, скачивание раздачи.</p>
  @endcomponent
  --}}

  @component('accordion')
    @slot('title')
      Почему моя раздача пропала?
    @endslot

    <p>Раздачи автоматически удаляются, если они были удалены или закрыты на сайте-первоисточнике rutracker.org.</p>
  @endcomponent

  @component('accordion')
    @slot('title')
      Как комментировать раздачи?
    @endslot

    <p>Для участия в дискуссии нужно быть зарегистрированным пользователем сайта. На странице раздачи под ее описанием и комментариями других пользователей располагается форма написания комментария.</p>
  @endcomponent

  <div class="h3 tw-mt-12">{{ trans('issues.create') }}</div>
  @ru
    <p>Поделитесь своими знаниями или задайте вопрос. Мы постараемся обработать информацию и дополнить эту страницу новыми материалами.</p>
  @en
    <p>Use the form below to ask a question or just to tell us how to make this page better.</p>
  @endru
  <feedback-form
    email="{{ Auth::user()->email ?? '' }}"
    title="Magnets FAQ"
    action="{{ path('Issues@store') }}"
    hide-title
  ></feedback-form>
</div>
@endsection
