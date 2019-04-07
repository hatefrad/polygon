<?php

/**
 * TriangleTest.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace tests\Models;

use PolygonManager\Models\Triangle;
use PHPUnit\Framework\TestCase;

class TriangleTest extends TestCase
{
	 function setUp() {
        $this->triangleModel = new Triangle();
    }

    /**
     * [testAreaByHeightCalculator : assert calc. area of triangle by height]
     *
     * @return boolean
     */
    public function testAreaByHeightCalculator()
    {
		$result = $this->triangleModel->areaCalculator(array('height' => 17, 'base' => 6));
		$expected = 51;
        $this->assertTrue($expected == $result);
    }

    /**
     * [testAreaBySidesCalculator : assert calc. area of triangle by sides]
     *
     * @return boolean
     */
    public function testAreaBySidesCalculator()
    {
        $result = $this->triangleModel->areaCalculator(array('adj' => 8, 'hyp' => 9, 'opp' => 10));
        $expected = 34.197;
        $this->assertTrue($expected == round($result, 3));
    }

    /**
     * [testPerimeterCalculator : assert calc. perimeter of triangle by sides]
     *
     * @return boolean
     */
    public function testPerimeterCalculator()
    {
		$result = $this->triangleModel->perimeterCalculator(array('adj' => 10, 'hyp' => 8, 'opp' => 6));
		$expected = 24;
        $this->assertTrue($expected == $result);
    }

    /**
     * [testMissingParameterException : test expected exception for missing parameters]
     *
     * @return boolean
     */
    public function testMissingParameterException()
    {
        $this->expectException(\Exception::class);
        $this->triangleModel->areaCalculator(array('height' => 1));
    }
}