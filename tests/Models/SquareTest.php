<?php

/**
 * SquareTest.php
 *
 * @author    Hatef SanaeiRad <HatefRad@gmail.com>
 * @copyright 2017
 */

namespace tests\Models;

use PolygonManager\Models\Square;
use PHPUnit\Framework\TestCase;

class SquareTest extends TestCase
{
	 function setUp() {
        $this->squareModel = new Square();
    }

    /**
     * [testAreaCalculator : assert calc. area of square by side]
     *
     * @return boolean
     */
    public function testAreaCalculator()
    {
		$result = $this->squareModel->areaCalculator(array('side' => 11));
		$expected = 121;
        $this->assertTrue($expected == $result);
    }

    /**
     * [testPerimeterCalculator : assert calc. perimeter of square by side]
     *
     * @return boolean
     */
    public function testPerimeterCalculator()
    {
		$result = $this->squareModel->perimeterCalculator(array('side' => 11));
		$expected = 44;
        $this->assertTrue($expected == $result);
    }

    /**
     * [testNegativeNumberException : test expected exception for neg. number]
     *
     * @return boolean
     */
    public function testNegativeNumberException()
    {
    	$this->expectException(\Exception::class);
        $this->squareModel->areaCalculator(array('side' => -1));
    }
}