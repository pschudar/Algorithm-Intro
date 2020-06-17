<?php
# I know there is a pow() function
function power($num, $pwr) {
    switch($num == 0 && $pwr == 0) {
        case true:
            return 'undefined';
    }
    switch($pwr) {
        case 0:
            return 1;
        default:
            return $num * power($num, $pwr-1);
    }
    
}

function factorial($num) {
    switch($num) {
        case 0:
            return 1;
        default:
            return $num * factorial($num-1);
    }
}

$arg1 = 5; # base number
$arg2 = 3; # power to which you raise the base number to

echo "$arg1<sup>$arg2</sup> is " . power($arg1, $arg2); # prints 5 to the power of 3 is 125
# 0 to the power of 0 is undefined, but this function returns 1. I know. It's just a demo!

echo '<p>&nbsp;</p>';

echo '4! equals ' . factorial(4); # prints 4! equals 24
