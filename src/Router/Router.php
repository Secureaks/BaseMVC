<?php

namespace App\Router;

use App\Controllers\HomeController;
use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

class Router
{

    public function run(): void
    {
        $router = new RouteCollector();

        /**
         * Routes definition
         */

        $router->get('/', function () {
            $controller = new HomeController();
            $controller->index();
        });

        $router->get('/model/{id}', function ($id) {
            $controller = new HomeController();
            $controller->getModel($id);
        });

        /**
         * End of routes definition
         */

        try {
            $dispatcher = new Dispatcher($router->getData());
            $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        } catch (HttpRouteNotFoundException $e) {
            $controller = new HomeController();
            $controller->error404();
        }
    }
}