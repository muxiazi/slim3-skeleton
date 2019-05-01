<?php

namespace App\Providers;

use League\Container\ServiceProvider\AbstractServiceProvider;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

/**
 * Class ViewServiceProvider.
 */
class ViewServiceProvider extends AbstractServiceProvider
{
    /**
     * @var array
     */
    protected $provides = ['view', Twig::class];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     */
    public function register()
    {
        $container = $this->getContainer();

        $twig = new Twig(base_path('resources/views'), [
            'cache' => $container->get('config')->get('view')['cache'],
        ]);
        $basePath = rtrim(str_ireplace('index.php', '', $container->get('request')->getUri()->getBasePath()), '/');
        $twig->addExtension(new TwigExtension($container->get('router'), $basePath));

        $container->share('view', function () use ($twig) {
            return $twig;
        });

        $container->share(Twig::class, function () use ($twig) {
            return $twig;
        });
    }
}
