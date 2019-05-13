<?php

return [
    'view' => [
        'cache' => 'true' === env('VIEW_CACHE_DISABLED') ? false : base_path('storage/views'),
    ],
];
