<?php declare(strict_types = 1);

namespace Jordan\FastExperiment;

use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\ResponseEmitter;

class App
{
    /**
     * Main entrypoint for app, performs bootstraping.
     */
    static function main()
    {
        $app = AppFactory::create();
        // Load routes
        Routes::loadRoutes($app);
        // Generate request object
        $request = ServerRequestCreatorFactory::create()
            ->createServerRequestFromGlobals();
        // Generate response
        $response = $app->handle($request);
        // Send to client
        (new ResponseEmitter())
            ->emit($response);
    }
}
