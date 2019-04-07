<?php

$dispatcher = \FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addGroup('/polygon', function (FastRoute\RouteCollector $r) {
        $r->addGroup('/area', function (FastRoute\RouteCollector $r) {
            $r->addRoute('GET', '/triangle','PolygonController:Triangle:areaCalculator');
            $r->addRoute('GET', '/rectangle','PolygonController:Rectangle:areaCalculator');
            $r->addRoute('GET', '/square', 'PolygonController:Square:areaCalculator');
            $r->addRoute('GET', '/regular-polygon', 'PolygonController:RegularPolygon:areaCalculator');
        });
        $r->addGroup('/perimeter', function (FastRoute\RouteCollector $r) {
            $r->addRoute('GET', '/triangle', 'PolygonController:Triangle:perimeterCalculator');
            $r->addRoute('GET', '/rectangle', 'PolygonController:Rectangle:perimeterCalculator');
            $r->addRoute('GET', '/square', 'PolygonController:Square:perimeterCalculator');
            $r->addRoute('GET', '/regular-polygon', 'PolygonController:RegularPolygon:perimeterCalculator');
        });
    });
});