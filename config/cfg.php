<?php

return [

    'cron_output' => env('CRON_OUTPUT', '/dev/null'),
    'default_locale' => 'ru',
    'locales' => [
        'ru' => ['posix' => 'ru_RU.UTF-8'],
        'en' => ['posix' => 'en_US.UTF-8'],
    ],
    'sitename' => 'Хостинг',

];
