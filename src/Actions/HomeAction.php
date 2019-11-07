<?php declare(strict_types = 1);

namespace Jordan\FastExperiment\Actions;

use Jordan\FastExperiment\Views\HomeView;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Action base class.
 */
class HomeAction
{
    function __invoke(Request $request, Response $response) : Response
    {
        $response->getBody()->write((string) new HomeView());
        return $response;
    }
}
