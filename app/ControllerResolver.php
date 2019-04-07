<?php

$controllerNS = 'PolygonManager\Controllers';
$modelNS = 'PolygonManager\Models';

$handler = $routeInfo[1];

if (false === strpos($handler, ':')) {
	echo 'Unable to parse the controller name!';
	die;
}

list($controller, $shape, $action) = explode(":", $handler, 3);
$controllerClass = $controllerNS.'\\'.$controller;
$modelClass = $modelNS.'\\'.$shape;