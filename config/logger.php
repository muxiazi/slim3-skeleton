<?php

return [
    'logger' => [
        'name' => env('LOGGER_NAME'),
        'path' => base_path('logs/app.log'),
        'level' => Monolog\Logger::DEBUG,
    ],
];
