<?php

return [
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
