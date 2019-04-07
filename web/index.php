<?php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/Router.php';

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$params = $_SERVER['QUERY_STRING'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}

$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

require_once __DIR__ . '/../app/ControllerResolver.php';

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo '404 not found!';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        echo '405 not allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        echo (new $controllerClass(new $modelClass(), $params))->$action();
        break;
}

die;
