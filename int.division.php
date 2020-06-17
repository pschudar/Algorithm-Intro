<?php
/**
 * Converts a chunk of minutes into hours and minutes
 * 
 * Accepts a numeric value as its only parameter. If it's non-numeric, a 
 * TypeError is thrown. Otherwise, the code checks for the availability of
 * the function intdiv() which is available in PHP 7 or above. If so, it uses
 * this function to make the conversion. If it's not available, the code
 * falls back to simple math. Compatible with PHP 5 and up.
 * @param float $total_minutes
 * @return string
 * @throws TypeError
 */
function timeTaken(float $total_minutes) {
    switch (is_numeric($total_minutes)) {
        case true:
            $minutes = $total_minutes % 60;
            switch (function_exists('intdiv')) {
                case true: # new in PHP 7
                    $hours = intdiv($total_minutes, 60);
                    break;
                default: # works in all versions of PHP
                    $hours = ($total_minutes - $minutes) / 60;
                    break;
            }
            return "Time taken was $hours hours $minutes minutes.";
        default:
            throw new TypeError();
    }
}

try {
    echo timeTaken(1159);
} catch (TypeError $e) {
    echo 'TypeError: ', $e->getMessage(), "\n";
}
