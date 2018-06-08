@extends('retracker.base')

@section('content')
<section class="pt-3 pb-5">
  <div class="container mw-800">
    <h3>Общие сведения</h3>
    <div class="mb-1">Ретрекер написан на языке <a class="link" href="http://www.perl.org/">Perl</a> с использованием следующих модулей:</div>
    <ul>
      <li><a class="link" href="https://metacpan.org/module/Digest::SHA1">Digest::SHA1</a> — позволяет создать уникальные идентификаторы пиров;</li>
      <li><a class="link" href="https://metacpan.org/module/EV">EV</a> — предоставляет интерфейс для регистрации обработчиков различных событий (срабатывание таймера, получение сигнала, появление доступных для чтения данных в сокете);</li>
      <li><a class="link" href="https://metacpan.org/module/IO::Socket::INET">IO::Socket::INET</a> — предоставляет интерфейс для создания сокетов;</li>
      <li><a class="link" href="https://metacpan.org/module/POSIX">POSIX</a> — упрощает вывод даты в необходимом формате.</li>
    </ul>
    <p>Ретрекер работает в бесконечном цикле, последовательно обрабатывая поступающие от клиентов запросы. На каждый сеанс связи отводится до 3 мс, так как для абсолютного большинства (99.99%) этого достаточно. Последовательная обработка исключает необходимость синхронизации и блокировки данных. В ретрекере присутствуют задачи по расписанию (cron), заключающиеся в удалении пиров и раздач, по которым долго (пятикратное время анонса) не поступали данные.</p>
    <p>Он может быть запущен на любых платформах, где есть язык Perl. Запуск можно осуществить как на всех сетевых интерфейсах сервера (0.0.0.0), так и на определенном (чаще всего — локальном).</p>
    <p>Ретрекер держит все данные в памяти. Было решено не хранить их в базе данных или файлах, так как в случае аварийного завершения работы ретрекер вернётся в прежнее состояние в течение 10 минут (при интервале анонса равном 5 минутам).</p>
    <p>Ретрекер умеет сохранять логи подключений клиентов и показывать краткую статистику о данных, хранящихся в его памяти.</p>
    <p>В случае аварийного завершения работы приложения предусморен мониторинг состояния. При отсутствии отклика от ретрекера будет произведен его перезапуск в течение пяти минут с оповещением администратора.</p>

    <h3 class="mt-5">Особенности ретрекера</h3>
    <ul>
      <li>чрезвычайно быстр;</li>
      <li>стабилен;</li>
      <li>расходует очень малое количество памяти — хранит только самую необходимую информацию о пирах и раздачах.</li>
    </ul>

    <h3 class="mt-5">Потребляемые ресурсы</h3>
    <p>Измерение проводилось после непрерывной работы ретрекера в течение недели. Занимаемый объем оперативной памяти составил <b>5&thinsp;976 КБ</b> при 1&thinsp;050 пирах на 1&thinsp;097 раздачах. К тому моменту было обслужено <b>1&thinsp;705&thinsp;680</b> подключений.</p>

    <h3 class="mt-5">Структура проекта</h3>
    <div class="mb-1">Проект состоит из 3 файлов:</div>
    <ul>
      <li><b>btrt.pl</b> (11&thinsp;534 байт) — основная логика приложения;</li>
      <li><b>functions.plib</b> (6&thinsp;046 байт) — вспомогательные функции;</li>
      <li><b>run</b> (1&thinsp;598 байт) — файл запуска приложения.</li>
    </ul>
    <p><a class="btn btn-primary" href="{{ path('Files@download', 122) }}">Скачать исходный код ретрекера</a></p>

    <h3 class="mt-5">Варианты запросов к ретрекеру</h3>
    <ul>
      <li><b>http://localhost:2790/ann</b> — запрос списка пиров;</li>
      <li><b>http://localhost:2790/ping</b> — проверка состояния трекера;</li>
      <li><b>http://localhost:2790/stats</b> — просмотр краткой статистики (количества пиров и раздач, о которых знает ретрекер).</li>
    </ul>

    <h3 class="mt-5">Хранимые данные пиров</h3>
    <ul>
      <li><b>mtime</b> — время последнего обращения к ретрекеру;</li>
      <li><b>seeder</b> — является ли пир сидом.</li>
    </ul>

    <h3 class="mt-5">Хранимые данные раздач</h3>
    <ul class="mb-0">
      <li><b>complete_count</b> — сколько раз полностью скачали раздачу;</li>
      <li><b>leechers</b> — количество личеров;</li>
      <li><b>mtime</b> — время последнего обращения за списком пиров по этой раздаче;</li>
      <li><b>peers</b> — данные пиров:
        <ul>
          <li><b>address</b> — упакованные IP и порт клиента.</li>
        </ul>
      </li>
      <li><b>seeders</b> — количество сидеров.</li>
    </ul>
  </div>
</section>
@endsection
