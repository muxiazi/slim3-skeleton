<?php

$container = $app->getContainer();

$container->get('settings')->replace([
    'displayErrorDetails' => 'dev' === getenv('APP_ENV'),
]);

$container->addServiceProvider(new App\Providers\ConfigServiceProvider());

foreach ($container->get('config')->get('providers') as $provider) {
    $container->addServiceProvider(new $provider());
}
