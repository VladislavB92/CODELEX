<?php

// Exercise 2
/* Complete loop to multiply i with itself n times, 
it is NOT allowed to use built-in pow() function */

$n = 0;

for ($i = 2; $n != 5; $n++) {
    $i *= $i;
    echo $i . PHP_EOL;
}
