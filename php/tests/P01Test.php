<?php

use PHPUnit\Framework\TestCase;
use Euler\P01;

class P01Test extends TestCase
{
    /** @test */
    public function lessThanThreeIsZero()
    {
        $this->assertEquals(0, P01::totalSum(2));
    }

    /** @test */
    public function fiveIsThreePlusFive()
    {
        $this->assertEquals(3, P01::totalSum(5));
    }

    /** @test */
    public function tenAsPartOfProblemDefinition()
    {
        $this->assertEquals(23, P01::totalSum(10));
    }

    /** @test */
    public function doubleDigit()
    {
        $this->assertEquals(60, P01::totalSum(16));
    }

    /** @test */
    public function tripleDigit()
    {
        $this->assertEquals(5948, P01::totalSum(160));
    }

    /** @test */
    public function finalOneThousand()
    {
        $this->assertEquals(233168, P01::totalSum(1000));
    }
}
