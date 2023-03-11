<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAddWillReturnTheSumOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 8, $sut->add( 5, 3 ) );
        $this->assertEquals( 5, $sut->add( 5, 0 ) );
    }
    public function testAddWillReturnTheSubtractOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 5, $sut->subtract( 8, 3 ) );
        $this->assertEquals( 10, $sut->subtract( 90, 80 ) );
    }
    public function testAddWillReturnTheMultiplyOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 9, $sut->multiply( 3, 3 ) );
        $this->assertEquals( 5, $sut->multiply( 5, 1 ) );
    }
    public function testAddWillReturnTheDivideOfItsParameters()
    {
        $sut = new Calculator();

        $this->assertEquals( 9, $sut->divide( 81, 9 ) );
        $this->assertEquals( 5, $sut->divide( 5, 0 ) );
    }
}