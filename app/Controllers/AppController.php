<?php

namespace App\Controllers;

use Anddye\App\Controllers\AbstractController;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\Twig;

/**
 * Class AppController.
 */
class AppController extends AbstractController
{
    /**
     * @param Response $response
     * @param Twig     $twig
     *
     * @return Response
     */
    public function index(Response $response, Twig $twig): Response
    {
        return $twig->render($response, 'app/index.html.twig', [
            'controllerName' => 'AppController',
            'controllerLocation' => __DIR__.'/AppController.php',
        ]);
    }
}
