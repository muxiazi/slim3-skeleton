<?php

$container = $app->getContainer();

// Inflector will invoke the `setContainer` method for every controller of that is resolved
$container->inflector(Anddye\App\Controllers\AbstractController::class)->invokeMethod('setContainer', [$container]);

// Update default settings
$container->get('settings')->replace([
    'displayErrorDetails' => 'dev' === env('APP_ENV'),
]);

// Core providers
$container->addServiceProvider(new App\Providers\ConfigServiceProvider());

// Additional providers
foreach ($container->get('config')->get('providers') as $provider) {
    $container->addServiceProvider(new $provider());
}
