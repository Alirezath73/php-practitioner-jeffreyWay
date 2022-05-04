<?php

namespace App\Core;

use App\Controllers\PageController;
use App\Helpers\Helpers;
use Exception;

class Router
{
    public $routes=[
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(...explode('@', $this->routes[$method][$uri]));
        }

        throw new \Exception('route does not exist!');
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        
        if (! method_exists($controller, $action)) {
            throw new Exception("in {$controller} method {$action} doesn't exists");
        }
        
        return (new $controller)->$action();
    }
}
