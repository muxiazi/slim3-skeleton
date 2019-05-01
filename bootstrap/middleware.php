<?php

foreach ($container->get('config')->get('middleware') as $middleware) {
    $app->add($container->get($middleware));
}
