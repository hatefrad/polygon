<?php

/**
 * RegularPolygon.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Models;

class RegularPolygon implements PolygonInterface {

    /**
     * [areaCalculator : formula -> 1/2 (apothem * length of one side * number of sides)]
     *
     * @param Array $params : length of one side and number of sides
     *
     * @return float $area
     */
    public function areaCalculator($params)
    {
        $this->_setParams($params);
        $apothem = $this->_calculateApothem();
        return 1/2*($apothem * $this->params['side'] * $this->params['n']);
    }

    /**
     * [perimeterCalculator : formula -> length of one side * number of sides]
     *
     * @param Array $params : length of one side and number of sides
     *
     * @return float $perimeter
     */
    public function perimeterCalculator($params)
    {
        $this->_setParams($params);
        return $this->params['side'] * $this->params['n'];
    }

    /**
     * [_calculateApothem : calculate apothem of the polygon]
     *
     * @return float $apothem
     */
    private function _calculateApothem()
    {
        return ($this->params['side'])/(2*(tan(pi() / $this->params['n'])));
    }

    /**
     * [_setParams : verifies and sets params]
     *
     * @param String $params : length of one side and number of sides
     */
    private function _setParams($params)
    {
        if (isset($params['side']) AND isset($params['n'])) {
            $this->params = $params;
        } else {
            throw new \Exception("Invalid params!", 1);
        }
    }
}