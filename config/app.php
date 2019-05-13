<?php

return [
    'cors' => [
        'origin' => env('CORS_ALLOW_ORIGIN'),
        'methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'],
        'headers.allow' => ['X-Requested-With', 'Content-Type', 'Accept', 'Origin', 'Authorization'],
        'headers.expose' => ['Authorization', 'Etag'],
        'credentials' => true,
        'cache' => 0,
    ],
    'commands' => [
        Anddye\Console\Commands\SayHelloCommand::class,
        Anddye\Console\Commands\SayGoodbyeCommand::class,
    ],
    'middleware' => [],
    'providers' => [
        App\Providers\DatabaseServiceProvider::class,
        App\Providers\LoggerServiceProvider::class,
        App\Providers\ViewServiceProvider::class,
    ],
];
