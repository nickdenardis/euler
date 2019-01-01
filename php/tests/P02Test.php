<?php

use PHPUnit\Framework\TestCase;
use Euler\P02;

class P02Test extends TestCase
{
    /** @test */
    public function zeroIsZero()
    {
        $this->assertEquals(0, P02::subEvenFibonacci(0));
    }

    /** @test */
    public function oneIsZero()
    {
        $this->assertEquals(0, P02::subEvenFibonacci(1));
    }

    /** @test */
    public function threeIsTwo()
    {
        $this->assertEquals(2, P02::subEvenFibonacci(3));
    }

    /** @test */
    public function tenIsFourtyFour()
    {
        $this->assertEquals(44, P02::subEvenFibonacci(90));
    }

    /** @test */
    public function fourMillion()
    {
        $this->assertEquals(4613732, P02::subEvenFibonacci(4000000));
    }
}
