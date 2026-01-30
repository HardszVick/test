<?php
// app/core/Router.php

class Router
{
    public function run()
    {
        $url = $_GET['url'] ?? '/task/index';
        $url = trim($url, '/');

        $parts = explode('/', $url);

        $controller = ucfirst($parts[0]) . 'Controller';
        $method = $parts[1] ?? 'index';

        $controllerPath = __DIR__ . '/../controllers/' . $controller . '.php';

        if (!file_exists($controllerPath)) {
            die("Controller não encontrado");
        }

        require_once $controllerPath;

        $instance = new $controller();

        if (!method_exists($instance, $method)) {
            die("Método não encontrado");
        }

        $instance->$method();
    }
}
