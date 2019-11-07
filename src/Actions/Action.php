<?php declare(strict_types = 1);

namespace Jordan\FastExperiment\Actions;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Action base class.
 */
abstract class Action
{
    abstract function __invoke(Request $request, Response $response) : Response;
}
