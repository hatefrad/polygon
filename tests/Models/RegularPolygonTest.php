<?php

/**
 * RegularPolygonTest.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace tests\Models;

use PolygonManager\Models\RegularPolygon;
use PHPUnit\Framework\TestCase;

class RegularPolygonTest extends TestCase
{
	 function setUp() {
        $this->regularPolygonModel = new RegularPolygon();
    }

    /**
     * [testAreaCalculator : assert calc. area of regular poly. by side and number of sides]
     *
     * @return boolean
     */
    public function testAreaCalculator()
    {
		$result = $this->regularPolygonModel->areaCalculator(array('side' => 7, 'n' => 5));
		$expected = 84.303;
        $this->assertTrue($expected == round($result, 3));
    }

    /**
     * [testPerimeterCalculator : assert calc. perimeter of regular poly. by side and number of sides]
     *
     * @return boolean
     */
    public function testPerimeterCalculator()
    {
		$result = $this->regularPolygonModel->perimeterCalculator(array('side' => 6, 'n' => 7));
		$expected = 42;
        $this->assertTrue($expected == $result);
    }
}