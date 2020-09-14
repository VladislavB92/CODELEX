<?php

// Exercise #4
/* Write a program 
to compute the product of integers 
from 1 to 10 (i.e., 1×2×3×...×10), as an int. 
Take note that it is the same as factorial of N. */

$factorial_number = readline("\nEnter the number to calculate its factorial: ");

$numbers = range(1, intval($factorial_number));

foreach ($numbers as $number) {
    $factorial = gmp_fact((int) $number);
}

echo $factorial . PHP_EOL;
