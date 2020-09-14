<?php

// Exercise #3
/* Write a program to produce the sum of 1, 2, 3, ..., to 100.
Store 1 and 100 in variables lower bound and upper bound, 
so that we can change their values easily.
Also compute and display the average. 

The output shall look like:

The sum of 1 to 100 is 5050
The average is 50.5 */

$lower_bond = readline("Enter the lower bond of the range: ");
$upper_bond = readline("\nEnter the upper bond of the range: ");
$numbers = range($lower_bond, $upper_bond);

$sum_of_numbers = array_sum($numbers);
echo "The sum of $lower_bond to $upper_bond is $sum_of_numbers \n";
echo "The average is " . $sum_of_numbers / count($numbers) . PHP_EOL;
