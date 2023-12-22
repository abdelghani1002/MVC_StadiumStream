<?php

namespace core;

use app\Controllers\HomeController;

class Router
{
    protected $routes = [];

    public function addRoute($route, $controller, $action)
    {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($uri)
    {
        $segments = explode('/', trim($uri, '/'));
        $segments_number = count($segments);
        $path = str_repeat('../', $segments_number - 1);
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            $homeController = new HomeController();
            $homeController->notFound($path);
        }
    }
}
