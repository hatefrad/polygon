<?php

/**
 * PolygonController.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Controllers;

use PolygonManager\Models\PolygonInterface;
use PolygonManager\Models\PolygonOutputter;

class PolygonController
{
    protected $polygonInterface;

    /**
     * [__construct : controller constructor]
     *
     * @param PolygonInterface $polygonInterface : instance of the polygon model
     * @param Array            $params           : polygon parameters
     */
    public function __construct(PolygonInterface $polygonInterface, $params)
    {
        parse_str($params, $this->params);
        $this->polygonInterface = $polygonInterface;
    }

    /**
     * [areaCalculator : calculates the area of a give polygon]
     *
     * @return float $area
     */
    public function areaCalculator()
    {
        $area = $this->polygonInterface->areaCalculator($this->params);
        return (new PolygonOutputter($area))->JSON();
    }

    /**
     * [perimeterCalculator : calculates the perimeter of a give polygon]
     *
     * @return float $perimeter
     */
    public function perimeterCalculator()
    {
        $perimeter = $this->polygonInterface->perimeterCalculator($this->params);
        return (new PolygonOutputter($perimeter))->HTML();
    }
}