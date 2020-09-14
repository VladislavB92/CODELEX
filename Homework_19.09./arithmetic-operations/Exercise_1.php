<?php

declare(strict_types = 1);

// Exercise #1
/* Write a program to accept two integers 
and return true if the either one is 15 
or if their sum or difference is 15. */

function checkInt(float $int1, float $int2): bool {

    if ($int1 === 15.0 || 
    $int2 === 15.0 || 
    $int1 + $int2 === 15.0 || 
    $int1 - $int2 === 15.0) {
        return true;
    }
    return false;
}

echo "Type two numbers.\n";
echo "You will see 'true' if\n1. one of them is 15\n2. if they sum is 15\n3. if their difference is 15.\n";
echo "Otherwise, you will see 'false'.\n";
$input1 = floatval(readline("\nType the first number: "));
$input2 = floatval(readline("\nType the second number: "));

if (checkInt($input1, $input2) == true) {
    echo "It's true!\n";
} else {
    echo "It's false!\n";
}


// var_dump(checkInt(15.0, 20.0)) . PHP_EOL; // true (15 || _)
// var_dump(checkInt(1.0, 15.0)) . PHP_EOL; // true (_ || 15)
// var_dump(checkInt(7.5, 7.5)) . PHP_EOL; // true (7.5 + 7.5 = 15)
// var_dump(checkInt(15.0, 15.0)) . PHP_EOL; // true (15 + 15 = 30)
// var_dump(checkInt(4.0, 5.0)) . PHP_EOL; // false