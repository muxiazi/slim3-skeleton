<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use Monolog\Logger;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\RotatingFileHandler;

/**
 * Class LoggerServiceProvider.
 */
class LoggerServiceProvider extends AbstractServiceProvider
{
    /**
     * @var array
     */
    protected $provides = ['logger', Logger::class];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     */
    public function register()
    {
        $container = $this->getContainer();
        $config = $container->get('config')->get('logger');
        $logger = new Logger($config['name']);
        $formatter = new LineFormatter('[%datetime%] [%level_name%]: %message% %context%'."\n", null, true, true);
        $rotating = new RotatingFileHandler($config['path'], 0, $config['level']);
        $rotating->setFormatter($formatter);
        $logger->pushHandler($rotating);

        $container->share('logger', function () use ($logger) {
            return $logger;
        });

        $container->share(Logger::class, function () use ($logger) {
            return $logger;
        });
    }
}
