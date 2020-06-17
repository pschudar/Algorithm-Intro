<?php

/**
 * Intro to Algorithms: Find the GCD of 2 integers
 * 
 * For two integers, represented by the variables $a and $b, where $a > $b,
 * divide by $b. If the remainder is 0, GCD is b. Else, set $a to $b, $b to
 * the remainder and repeat until the remainder is 0.
 * @param int $a
 * @param int $b
 * @return int
 * @throws TypeError
 */
function alg_gcd(int $a, int $b) {
    switch (is_numeric($a) && is_numeric($b)) {
        case true:
            while ($b != 0):
                $t = $a;
                $a = $b;
                $b = $t % $b;
            endwhile;
            break;
        default:
            throw new TypeError();
            break;
    }
    return $a;
}

try {
#echo alg_gcd(20, 8); # prints 4
    echo alg_gcd(60, 96); # prints 12
} catch (TypeError $e) {
    echo 'TypeError: ', $e->getMessage(), "\n";
}
