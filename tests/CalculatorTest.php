<?php

namespace ChadicusTest;

use Chadicus\Calculator;

/**
 * @coversDefaultClass Chadicus\Calculator
 * @covers ::<private>
 */
final class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Verify basic functionality of add().
     *
     * @test
     * @covers ::add
     *
     * @return void
     */
    public function add()
    {
        $calculator = new Calculator();
        $this->assertSame(4, $calculator->add(3, 1));
    }

    /**
     * Verify basic functionality of multiply().
     *
     * @test
     * @covers ::multiply
     *
     * @return void
     */
    public function multiply()
    {
        $calculator = new Calculator();
        $this->assertSame(3, $calculator->multiply(3, 1));
    }
}
