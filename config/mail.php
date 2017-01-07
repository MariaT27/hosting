<?php

return [

    // smtp, mail, sendmail, mailgun, mandrill, log
    'driver'     => env('MAIL_DRIVER', 'smtp'),
    'host'       => env('MAIL_HOST', 'localhost'),
    'port'       => env('MAIL_PORT', 25),
    'from'       => [
        'address' => env('MAIL_USERNAME', null),
        'name'    => 'vacuum.kaluga',
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'username'   => env('MAIL_USERNAME'),
    'password'   => env('MAIL_PASSWORD'),
    'sendmail'   => '/usr/sbin/sendmail -bs',

];
