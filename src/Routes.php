<?php declare(strict_types = 1);

namespace Jordan\FastExperiment;

use Jordan\FastExperiment\Actions\HomeAction;
use Slim\App as SlimApp;

class Routes
{
    static function loadRoutes(SlimApp $app)
    {
        $app->get('/', HomeAction::class);
    }
}
