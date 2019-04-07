<?php

/**
 * Rectangle.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Models;

class Rectangle implements PolygonInterface {

    /**
     * [areaCalculator : area of rectange -> a*b]
     *
     * @param Array $params : 2 sides of rectangle
     *
     * @return float $area : calculated area of rectangle
     */
    public function areaCalculator($params)
    {
        $this->_setParams($params);
        return ($this->params['length'] * $this->params['width']);
    }

    /**
     * [perimeterCalculator : perimeter of rectange -> 2*a+2*b]
     *
     * @param Array $params : 2 sides of rectangle
     *
     * @return float $perimeter : calculated perimeter of rectangle
     */ 
    public function perimeterCalculator($params)
    {
        $this->_setParams($params);
        return ((2 * $this->params['length']) + (2 * $this->params['width']));
    }

    /**
     * [_setParams : verifies and sets params]
     *
     * @param Array $params : 2 sides of rectangle
     */
    private function _setParams($params)
    {
        if (isset($params['length']) AND isset($params['width'])) {
            $this->params = $params;
        } else {
            throw new \Exception("Invalid params!", 1);
        }
    }
}