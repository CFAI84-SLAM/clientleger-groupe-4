<?php
use App\Controller\ContactController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function(RoutingConfigurator $routes) {
    $routes->add('test', '/test')->controller([ContactController::class, 'list']);
};