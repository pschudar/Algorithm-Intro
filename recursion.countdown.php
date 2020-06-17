<?php
# basic example of recursion. 
# here, do not use a float, such as 5.4. The loop continues forever.
# would need to add $x >= 0 to the first case to stop it.
function rec_countdown($x) {
    switch($x) {
        case 0:
            echo 'Done';
            break;
        default:
            echo $x, '...';
            rec_countdown($x-1);
            break;
    }
}

rec_countdown(5); # prints 5...4...3...2...1...Done
