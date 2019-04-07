<?php

/**
 * RectangleTest.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace tests\Models;

use PolygonManager\Models\Rectangle;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
	 function setUp() {
        $this->rectangleModel = new Rectangle();
    }

    /**
     * [testAreaCalculator : assert calc. area of rectangle by sides]
     *
     * @return boolean
     */
    public function testAreaCalculator()
    {
		$result = $this->rectangleModel->areaCalculator(array('length' => 7, 'width' => 9));
		$expected = 63;
        $this->assertTrue($expected == $result);
    }

    /**
     * [testPerimeterCalculator : assert calc. perimeter of rectangle by sides]
     *
     * @return boolean
     */
    public function testPerimeterCalculator()
    {
		$result = $this->rectangleModel->perimeterCalculator(array('length' => 11, 'width' => 7));
		$expected = 36;
        $this->assertTrue($expected == $result);
    }
}