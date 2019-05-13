<?php

require_once __DIR__.'/../vendor/autoload.php';

// The check is to ensure we don't use .env in production
if (!env('APP_ENV')) {
    try {
        (new Symfony\Component\Dotenv\Dotenv())->load(base_path('.env'));
    } catch (Symfony\Component\Dotenv\Exception\PathException $ex) {
        echo $ex->getMessage();
        exit(1);
    }
}

$app = new Anddye\App\App();

require_once base_path('bootstrap/container.php');
require_once base_path('bootstrap/middleware.php');
require_once base_path('bootstrap/routes.php');
