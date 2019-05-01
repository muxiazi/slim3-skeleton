<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use Noodlehaus\Config;

/**
 * Class ConfigServiceProvider.
 */
class ConfigServiceProvider extends AbstractServiceProvider
{
    /**
     * @var array
     */
    protected $provides = ['config', Config::class];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     */
    public function register()
    {
        $container = $this->getContainer();
        $config = new Config(glob(base_path('config/*.php')));

        $container->share('config', function () use ($config) {
            return $config;
        });

        $container->share(Config::class, function () use ($config) {
            return $config;
        });
    }
}
