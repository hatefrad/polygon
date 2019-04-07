<?php

/**
 * Triangle.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace PolygonManager\Models;

class Triangle implements PolygonInterface {

    /**
     * [areaCalculator : area of a triangle can be calculated in two ways:
     * from height and base: 1/2 b * h
     * from three sides: sqrt((s)(s-a)(s-b)(s-c)) where s = 1/2 perimeter]
     *
     * @param Array $params : height & base OR three sides
     *
     * @return float $area : calculated area of triangle
     */
    public function areaCalculator($params)
    {
        $this->_setParams($params, 'area');
        return (count($this->params) == 2) ? $this->_calculateAreaByHeight() : $this->_calculateAreaBySides();
    }

    /**
     * [perimeterCalculator : perimeter of a triangle -> a + b + c]
     *
     * @param Array $params : three sides of triangle
     *
     * @return float $area : calculated perimeter of triangle
     */
    public function perimeterCalculator($params)
    {
        $this->_setParams($params, 'perimeter');
        return $this->_calculatePerimeterBySides();
    }

    /**
     * [_calculateAreaBySides : calculate area of a triangle by having three sides]
     *
     * @param Array $params : three sides
     *
     * @return float $area : calculated area of triangle
     */
    private function _calculateAreaBySides()
    {
        $s = $this->_calculatePerimeterBySides()/2;
        return sqrt($s*($s-$this->params['adj'])*($s-$this->params['hyp'])*($s-$this->params['opp']));
    }

    /**
     * [_calculateAreaByHeight : calculate area of a triangle by having height and base]
     *
     * @param Array $params : height and base
     *
     * @return float $area : calculated area of triangle
     */
    private function _calculateAreaByHeight()
    {
        return $this->params['height'] * $this->params['base'] / 2;
    }

    /**
     * [_calculatePerimeterBySides : calculate perimeter of a triangle]
     *
     * @param Array $params : three sides
     *
     * @return float $perimeter : calculated perimeter of triangle
     */
    private function _calculatePerimeterBySides() {
        return $this->params['adj'] + $this->params['hyp'] + $this->params['opp'];
    }

    /**
     * [_setParams : verifies and sets params]
     *
     * @param Array $params : height and base OR three sides
     * @param String $task : calling function
     */
    private function _setParams($params, $task)
    {
        if (isset($params['adj']) AND isset($params['hyp']) AND isset($params['opp'])) {
            $this->params = $params;
        } else if ($task == 'area' AND isset($params['height']) AND isset($params['base'])) {
            $this->params = $params;
        } else {
            throw new \Exception("Invalid params!", 1);
        }
    }
}