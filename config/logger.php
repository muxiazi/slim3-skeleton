<?php

return [
    'logger' => [
        'name' => getenv('LOGGER_NAME'),
        'path' => base_path('logs/app.log'),
        'level' => Monolog\Logger::DEBUG,
    ],
];
