<?php

use PHPUnit\Framework\TestCase;
use Euler\P03;

class P03Test extends TestCase
{
    /** @test */
    public function examplePrimeFactors()
    {
        $this->assertEquals(29, P03::largestPrimeFactors(13195));
    }
}
