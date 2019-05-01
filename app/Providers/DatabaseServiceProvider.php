<?php

namespace App\Providers;

use Illuminate\Database\Capsule\Manager as Capsule;
use League\Container\ServiceProvider\AbstractServiceProvider;
use League\Container\ServiceProvider\BootableServiceProviderInterface;

/**
 * Class DatabaseServiceProvider.
 */
class DatabaseServiceProvider extends AbstractServiceProvider implements BootableServiceProviderInterface
{
    /**
     * Method will be invoked on registration of a service provider implementing
     * this interface. Provides ability for eager loading of Service Providers.
     */
    public function boot()
    {
        $container = $this->getContainer();

        $capsule = new Capsule();
        $capsule->addConnection($container->get('config')->get('db'));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     */
    public function register()
    {
        // TODO: Implement register() method.
    }
}
