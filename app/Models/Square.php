<?php

/**
 * Square.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Models;

class Square implements PolygonInterface {

    /**
     * [areaCalculator : area of the square -> a^2]
     *
     * @param Array $params : side of the square
     *
     * @return float $perimeter : calculated perimeter of square
     */
    public function areaCalculator($params)
    {
        $this->_setParams($params);
        return pow($this->params['side'], 2);
    }

    /**
     * [perimeterCalculator : perimeter of square -> 4*a]
     *
     * @param Array $params : side of the square
     *
     * @return float $perimeter : calculated perimeter of square
     */ 
    public function perimeterCalculator($params)
    {
        $this->_setParams($params);
        return $this->params['side'] * 4;
    }

    /**
     * [_setParams : verifies and sets params]
     *
     * @param Array $params : side of the square
     */
    private function _setParams($params)
    {
        if (isset($params['side']) AND $params['side'] > 0) {
            $this->params = $params;
        } else {
            throw new \Exception("Invalid params!", 1);
        }
    }
}