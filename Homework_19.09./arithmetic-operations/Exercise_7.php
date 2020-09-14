<?php

// Exercise 7
/* Modify the example program to compute the position of an object 
after falling for 10 seconds, outputting the position in
meters. The formula in Math notation is:
    x(t) = 0.5 * at^2 + vi * t + xi
    
    Note: The correct value is -490.5m.
*/

$acceleration = -9.81;
$time = 10;
$velocity_initial = 0;
$position_initial = 0;

// x(10) = 0.5 * -9.81 * 10^2 + 0 * 10 + 0

$position_in_meters = 0.5 * $acceleration * pow($time, 2) 
+ $velocity_initial * $time + $position_initial;

echo $position_in_meters . PHP_EOL;