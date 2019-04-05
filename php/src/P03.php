<?php

namespace Euler;

/**
 * The prime factors of 13195 are 5, 7, 13 and 29.
 * What is the largest prime factor of the number 600851475143 ?
 */
class P03
{
    public static function largestPrimeFactors(int $number)
    {
        $prime_factors = [];

        $next = gmp_nextprime(1);
        for ($i = $next; $next <= $number; $next = gmp_nextprime($i)) {
            $prime_factors[] = $next;
        }

        print_r($prime_factors);

        return (int)end($prime_factors);
    }
}
