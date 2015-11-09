<?php

namespace Chadicus;

final class Calculator
{
    /**
     * Returns the sum of $x and $y
     *
     * @param integer $x The first integer.
     * @param integer $y The second integer.
     *
     * @return integer The sum of $x and $y
     */
    public function add($x, $y)
    {
        return $x + $y;
    }

    /**
     * Return the product of $x and $y
     *
     * @param integer $x The first integer.
     * @param integer $y The second integer.
     *
     * @return integer The product of $x and $y
     */
    public function multiply($x, $y)
    {
        return $x * $y;
    }
}
