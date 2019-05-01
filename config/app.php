<?php

return [
    'commands' => [
        Anddye\Console\Commands\SayHelloCommand::class,
        Anddye\Console\Commands\SayGoodbyeCommand::class,
        App\Commands\UserCommand::class,
    ],
    'middleware' => [],
    'providers' => [
        App\Providers\DatabaseServiceProvider::class,
    ],
];
