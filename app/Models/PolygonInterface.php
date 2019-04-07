<?php

/**
 * PolygonInterface.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Models;

interface PolygonInterface {

    /**
     * [areaCalculator description]
     *
     * @return [type] [description]
     */
    public function areaCalculator($params);

    /**
     * [perimeterCalculator description]
     *
     * @return [type] [description]
     */
    public function perimeterCalculator($params);
}