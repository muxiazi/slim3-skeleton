<?php

$app->add(new Tuupola\Middleware\CorsMiddleware($container->get('config')->get('cors')));

foreach ($container->get('config')->get('middleware') as $middleware) {
    $app->add($container->get($middleware));
}
