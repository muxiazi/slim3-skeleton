<?php

namespace App\Controllers;

use Anddye\App\Controllers\AbstractController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Class AppController.
 */
class AppController extends AbstractController
{
    /**
     * @param Request  $request
     * @param Response $response
     *
     * @return Response
     */
    public function getAction(Request $request, Response $response): Response
    {
        return $response->withJson([
            'actionName' => 'getAction',
            'controllerName' => 'AppController',
            'controllerLocation' => __DIR__.'/AppController.php',
        ]);
    }
}
