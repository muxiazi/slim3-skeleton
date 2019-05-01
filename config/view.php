<?php

return [
    'view' => [
        'cache' => 'true' === getenv('VIEW_CACHE_DISABLED') ? false : base_path('storage/views'),
    ],
];
