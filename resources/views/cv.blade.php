<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <title>Сергей Панков &middot; Резюме</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex, nofollow">
  <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
  <link rel="stylesheet" href="https://yandex.st/bootstrap/2.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://yandex.st/bootstrap/2.3.1/css/bootstrap-responsive.min.css">

  <meta content="summary" property="twitter:card">
  <meta content="@knifevacuum" property="twitter:site">
  <meta content="252045193" property="twitter:site:id">
  <meta content="206702146011627" property="fb:app_id">
  <meta content="100001136135534" property="fb:admins">
  <meta content="profile" property="og:type">
  <meta content="Сергей Панков &middot; Резюме" property="og:title">
  <meta content="{{ canonical() }}" property="og:url">
  <meta content="https://life.ivacuum.ru/me.jpg" property="og:image">
  <meta content="Веб-программист (PHP). Заинтересован в создании полезных людям веб-сервисов. Веб-технологиями увлекаюсь с 2003 года. С кодом моих проектов можно ознакомиться на Гитхабе. Возможна удаленная работа." property="og:description">
  <meta content="Сергей" property="profile:first_name">
  <meta content="Панков" property="profile:last_name">
  <meta content="male" property="profile:gender">
  <meta content="ivacuum" property="profile:username">
<style>
body {
  background-color: #A1A1A1;
  color: #4B4B4B;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  font-weight: 400;
  padding-bottom: 40px;
  padding-top: 20px;
}

h1, h2 , h3, h4, h5, p, li {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 400;
  color: #4B4B4B;
  margin: 0;
  padding: 0;
}
i {
  margin-right: 3px;
}
a:hover {
  color: #006291;
  text-decoration: none;
}

/* container */
.container-fluid  {
  max-width: 860px;
  margin: 0 auto;
}
.wrapper {
  background-color: #FFFFFF;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
     -moz-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.27), 0 0 40px rgba(0, 0, 0, 0.06) inset;
          box-shadow: 0 1px 6px rgba(0, 0, 0, 0.30), 0 0 40px rgba(0, 0, 0, 0.10) inset;
  padding: 50px 40px 19px 40px;
}
.my-info,
.my-message,
.my-skill,
.my-specifics,
.my-venture,
.my-venture > span {
  font-size: 13px;
  font-weight: 400;
}
.contact,
.heading,
.resume {
  margin: 0 0 1em 0;
}

/* the header portion */
.my-picture {
  background-color: #FFFFFF;
  border: 1px solid #C0C0C0;
  border: 1px solid rgba(0, 0, 0, 0.2);
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
     -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
          box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  float: left;
  margin: 0 20px 5px 0;
  padding: 4px;
  width: 150px;
}
.my-name {
  color: #4A4A4A;
  font-size: 24px;
  line-height: 34px;
  text-transform: uppercase;
}
.my-profession,
.my-services {
  font-size: 16px;
  line-height: 34px;
}
.my-profession {
  color: #389B17;
}
.my-services {
  margin-top: 34px;
}
.my-services > a {
  float: right;
}

/* resume */
.my-caption {
  border-bottom: 1px dotted #389B17;
  color: #389B17;
  font-size: 14px;
  font-weight: 400;
  line-height: normal;
  margin-top: 15px;
  text-transform: uppercase;
  padding-bottom: 3px;
}
.wrapper > .my-caption {
  margin-bottom: 11px;
}
.my-activity {
  font-size: 13px;
  font-weight: 600;
  margin-top: 4px;
}
.my-venture > span {
  float: right;
}
.my-specifics {
  margin-top: 5px;
  margin-bottom: 10px;
}
.my-skill {
  padding-top: 1px;
  font-weight: 400;
}
.my-skill + .my-skill {
  padding-bottom: -1px;
}
.my-skill > span {
  float: right;
  font-size: 10px;
  font-weight: 400;
  margin: 1px 0 0 0;
  padding: 0;
}
.my-caption + .my-activity,
.my-caption + .my-venture,
.my-caption + .my-specifics,
.my-caption + .my-skill,
.my-caption + .my-info {
    margin-top: 5px;
}
.my-caption + .my-skill {
    margin-top: 4px;
}

/* contact tab */
#my-location {
  border: 1px solid #D8D8D8;
  height: 200px;
  margin-bottom: 5px;
  width: 100%;
}
#my-location img {
    max-width: none;
}
.my-info {
  height: 20px;
  display: block;
}
.my-info > span {
  float: right;
}


@media (min-width: 768px) and (max-width: 979px) {

  .wrapper {
    padding: 50px 30px 19px 30px;
  }

}

@media (min-width: 768px) and (max-width: 768px) {

  body {
    padding: 0;
  }
  .wrapper {
    padding: 50px 30px 19px 30px;
  }

}

@media (min-width: 569px) and (max-width: 767px) {

  body {
    padding: 0;
  }
  .wrapper {
    padding: 40px 30px 0 30px;
  }
  .contact,
  .heading,
  .resume {
    margin: 0 0 25px 0;
  }

}

@media (min-width: 240px) and (max-width: 568px) {

  body {
    padding: 0;
  }
  .wrapper {
    padding: 25px 20px 0 20px;
  }
  .contact,
  .heading,
  .resume {
    margin: 0 0 25px 0;
  }
  .my-picture {
    width: 70px;
    margin: 0 10px 0 0;
  }
  .my-name {
    font-size: 16px;
    line-height: 20px;
  }
  .my-profession {
    font-size: 14px;
    line-height: 24px;
  }
  .my-services {
    font-size: 14px;
    line-height: 24px;
    margin-top: 10px;
  }
  .my-message,
  .my-servicetext {
    line-height: 16px;
  }

}
</style>
</head>
<body>
<div class="container-fluid wrapper">
  <div class="row-fluid heading">
    <div class="span8">
      {{-- <img class="my-picture" src="http://www.gravatar.com/avatar/693c6f7aa6029f0055a455ae89a989f7?s=150"> --}}
      <img class="my-picture" src="https://life.ivacuum.ru/me.jpg" width="160" height="160">
      <h1 class="my-name">Сергей Панков</h1>
      <h2 class="my-profession">Веб-программист (PHP)</h2>
      <p class="my-message">Заинтересован в создании полезных людям веб-сервисов. Веб-технологиями увлекаюсь с 2003 года. С кодом моих проектов можно ознакомиться на <a href="https://github.com/ivacuum">Гитхабе</a>. Возможна удаленная работа.</p>
      <div class="clearfix"></div>
      {{-- <p><img src="http://img.klavogonki.ru/userbar/ub6-232590.gif"></p> --}}
      <div class="row-fluid resume">
        <div class="span6">
          <h3 class="my-caption">Образование</h3>
          <h4 class="my-activity">Высшее, МГТУ им. Баумана</h4>
          <h5 class="my-venture">
            Инженер-программист
            <span>2006&mdash;2012</span>
          </h5>
          <h3 class="my-caption">Курсы и тренинги</h3>
          <h4 class="my-activity">Английский язык</h4>
          <h5 class="my-venture">
            Грамматика
            <span>2006</span>
          </h5>
          <h5 class="my-venture">
            Разговорный
            <span>2011</span>
          </h5>
        </div>
        <div class="span6">
          <h3 class="my-caption">Опыт работы</h3>
          <p>01.12.2014 — по настоящее время</p>
          <p>ООО Гала Маркетинг</p>
          <p>Технический директор</p>

          <p>&nbsp;</p>
          <p>18.11.2013 — 11.03.2014</p>
          <p><a href="http://www.smart-media.ru/">ООО МедиаКонтент</a></p>
          <p>Ведущий разработчик</p>

          <p>&nbsp;</p>
          <p>10.09.2007 &mdash; 31.05.2013</p>
          <p><a href="http://www.korden.ru/">ООО Корден</a></p>
          <p>Веб-программист</p>
        </div>
      </div>
    </div>
    <div class="span4">
      <h3 class="my-caption">Контактная информация</h3>
      <h4 class="my-info">
        Телефон
        <span>+7 (910) 514-1181</span>
      </h4>
      <h4 class="my-info">
        Электропочта
        <span><a href="mailto:vacuum@ivacuum.ru">vacuum@ivacuum.ru</a></span>
      </h4>
      <h4 class="my-info">
        Веб-сайт
        <span><a href="/">vacuum.name</a></span>
      </h4>

      <h3 class="my-caption">Личная информация</h3>
      <h4 class="my-info">
        Возраст
        <span>{{ Illuminate\Support\Carbon::createFromDate(1989, 7, 13)->diffForHumans(null, true) }}</span>
      </h4>
      <h4 class="my-info">
        Гражданство
        <span>Россия</span>
      </h4>
      <h4 class="my-info">
        Проживание
        <span>Калуга</span>
      </h4>
      <h4 class="my-info">
        Семейное положение
        <span>Не женат</span>
      </h4>
      <h4 class="my-info">
        Дети
        <span>Нет</span>
      </h4>

      <h3 class="my-caption">В сети</h3>
      <h4 class="my-info">
        Гитхаб
        <span><a href="https://github.com/ivacuum">ivacuum</a></span>
      </h4>
      <h4 class="my-info">
        Скайп
        <span><a href="skype:knifevacuum?call">knifevacuum</a></span>
      </h4>
      <h4 class="my-info">
        ВКонтакте
        <span><a href="https://vk.com/ivacuum">ivacuum</a></span>
      </h4>
      <h4 class="my-info">
        Телеграм
        <span><a href="https://telegram.me/vacuum">vacuum</a></span>
      </h4>
    </div>
  </div>
  <div class="my-caption">Профессиональные навыки</div>
  <ul>
    <li>ОС: Windows, Linux, macOS <span class="muted">(преимущественно)</span>, FreeBSD</li>
    <li>
      Языки программирования:
      PHP <span class="muted">(с 2003 года)</span>,
      Perl <span class="muted">(с 2009 года)</span>,
      знаком с Ruby и Python
    </li>
    <li>
      Технологии, софт:
      <a href="http://www.ansible.com/">Ansible</a>,
      <a href="http://bittorrent.org/">BitTorrent</a>,
      <a href="http://cfengine.com/">CFEngine</a>,
      <a href="http://jenkins-ci.org/">Jenkins</a>,
      <a href="http://laravel.com/">Laravel</a>,
      <a href="http://software.schmorp.de/pkg/libev.html">libev</a>,
      <a href="http://memcached.org/">memcached</a>,
      <a href="http://www.mysql.com/">MySQL</a>,
      <a href="http://nginx.org/ru/">nginx</a>,
      <a href="http://gardengnomesoftware.com/pano2vr.php">Pano2VR</a>,
      <a href="http://sphinxsearch.com/">sphinxsearch</a>
    </li>
    <li>Прочие языки: HTML, CSS, SASS, JavaScript</li>
    <li>Работа с API: <a href="https://developers.facebook.com/docs/reference/api/">Facebook</a>, <a href="http://developer.github.com/">GitHub</a>, <a href="https://code.google.com/apis/console/‎">Google</a>, <a href="http://mmedia.ozon.ru/multimedia/download/api_2.1_120115.pdf">OZON.ru</a>, <a href="https://vk.com/dev">VK</a>, <a href="http://wiki.webmoney.ru/projects/webmoney/wiki/wm-api">WebMoney</a>, <a href="http://api.yandex.ru/">Яндекс</a></li>
  </ul>
  <div class="my-caption">Выполненные проекты</div>
  <ul>
    <li>
      2015 год
      <ul>
        <li><a href="https://kupislona.ru/">kupislona.ru</a> — доска объявлений Калуги и Калужской области</li>
      </ul>
    </li>
    <li>
      2014 год
      <ul>
        <li><a href="https://hosting.ivacuum.ru/">hosting.ivacuum.ru</a> — заметки о путешествиях и концертах</li>
      </ul>
    </li>
    <li>
      2013 год
      <ul>
        <li>Проектирование хостинга для веб-студии Корден (централизованное управление кластером из 6 серверов)</li>
        <li><a href="http://teploclubknauf.ru/">ТеплоКлуб</a> &mdash; совместный проект с компаниями <a href="http://www.knaufinsulation.ru/">Knauf Insulation</a> и <a href="http://www.ozon.ru/">OZON.ru</a></li>
        <li><a href="https://github.com/ivacuum/fw">ivacuum.fw</a> &mdash; фреймворк для разработки сайтов</li>
      </ul>
    </li>
    <li>
      2012 год
      <ul>
        <li>Организация рабочего процесса разработки сайтов в веб-студии Корден (тестовые площадки, использование системы контроля версий, работа в команде, использование системы интеграции для распространения кода по серверам)</li>
        <li>Сборка виртуальных туров из панорам: <a href="http://nayadakaluga.ru/pano-moskovski">ТЦ Московский</a>, <a href="http://nayadakaluga.ru/pano-suvorovski">ТЦ Суворовский</a>, <a href="http://nayadakaluga.ru/pano-obninsk">Технокерамика</a></li>
        <li><a href="http://kwan-park.ru/">kwan-park.ru</a> &mdash; разработка сайта спортивного комплекса Квань</li>
      </ul>
    </li>
    <li>
      2011 год
      <ul>
        <li>Проектирование и разработка системы документооборота для сайта <a href="http://korden.org/">korden.org</a> &mdash; выставление счетов, актов, формирование договоров, оплата по безналичному переводу и WebMoney</li>
      </ul>
    </li>
    <li>
      2010 год
      <ul>
        <li><a href="http://btt.ivacuum.ru/stats">btt.ivacuum.ru</a> &mdash; координатор взаимодействия клиентов в сети BitTorrent (обслуживает порядка 3 000 000 подключений в день) <span class="muted">[дипломный проект]</span></li>
        <li><a href="http://retracker.ivacuum.ru/">retracker.ivacuum.ru</a> &mdash; оптимизация файлообмена в сети BitTorrent</li>
        <li><a href="http://torrent.ivacuum.ru/">torrent.ivacuum.ru</a> &mdash; торрент-трекер в локальной сети Билайн-Калуга</li>
      </ul>
    </li>
    <li>
      2009 год
      <ul>
        <li>bugs.ivacuum.ru &mdash; сервис для учета и хранения задач, которые необходимо выполнить</li>
        <li>ivacuum.ru/csstats/ &mdash; статистика в реальном времени для игры Counter-Strike</li>
        <li><a href="http://img.ivacuum.ru/stats">img.ivacuum.ru</a> &mdash; сервис подсчета просмотров изображений (более <a href="http://up.ivacuum.ru/%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F/%D0%B3%D0%B4%D0%B5_%D1%81%D0%BC%D0%BE%D1%82%D1%80%D1%8F%D1%82/">100 000 000</a> просмотров)</li>
        <li><a href="http://up.ivacuum.ru/">up.ivacuum.ru</a> &mdash; сервис загрузки изображений (загружено более <a href="http://up.ivacuum.ru/%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F/%D1%81%D1%82%D0%B0%D1%82%D0%B8%D1%81%D1%82%D0%B8%D0%BA%D0%B0/">200 000</a> изображений)</li>
      </ul>
    </li>
    <li>
      2008 год
      <ul>
        <li>ivacuum.ru/игры/ &mdash; мониторинг игровых серверов Call of Duty, Counter-Strike, Diablo, Killing Floor, Left 4 Dead, Warcraft</li>
        <li>torrent.elcomnet.ru &mdash; обслуживание и улучшение торрент-трекера в локальной сети Спарк-Калуга</li>
      </ul>
    </li>
    <li>2007 год
      <ul>
        <li>Сборка, запуск и администрирование игровых серверов в локальной сети Спарк-Калуга</li>
        <li><a href="http://dc.ivacuum.ru/">dc.ivacuum.ru</a> &mdash; энциклопедия клиентов DC++</li>
        <li><a href="http://dl.ivacuum.ru/">dl.ivacuum.ru</a> &mdash; сервис учета скачиваний файлов (более <a href="http://dl.ivacuum.ru/stats/">1 700 000</a> скачиваний)</li>
      </ul>
    </li>
    <li>
      2006 год
      <ul>
        <li><a href="http://school5.kaluga.ru/">school5.kaluga.ru</a> &mdash; сайт школы №5 города Калуги <span class="muted">[проект представлялся на выпускном экзамене]</span></li>
      </ul>
    </li>
    <li>
      2004 год
      <ul>
        <li>combats.ivacuum.ru &mdash; клон браузерной игры Бойцовский Клуб</li>
      </ul>
    </li>
    <li>
      2003 год
      <ul>
        <li><a href="/">ivacuum.ru</a> &mdash; запуск головного сайта собственных проектов</li>
      </ul>
    </li>
  </ul>
</div>
</body>
</html>
