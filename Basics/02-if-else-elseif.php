<?php

echo "\n--------Exercise 1-----------------------\n";
// Exercise 1
/* Given variables (int) 10, 
string "10" determine if they both are the same. */

$num1 = 10;
$str1 = "10";

if ($num1 == $str1) {
    echo "Equal! \n";
} else {
    echo "Same. \n";
}

echo "\n--------Exercise 2-----------------------\n";
// Exercise 2
/* Given variable (int) 50, 
determine if its in the range of 1 and 100. */

$num2 = 50;

if ($num2 >= 1 && $num2 <= 100) {
    echo "This number is between 1 and 100. \n";
} else {
    echo "The number is out of range. \n";
}

echo "\n-------Exercise 3------------------------\n";
// Exercise 3
/* Given variables (string) "hello" create a condition that 
if the given value is "hello" then output "world". */

$str2 = "Hello";

if ($str2 == "Hello") {
    echo "$str2 world \n";
}

echo "\n-------Exercise 4------------------------\n";
// Exercise 4
/* By your choice, create condition with 3 checks.
For example, if value is greater than X, 
less than Y and is an even number. */

$x = 69;
$y = 420;

if ($x < $y) {
    echo "$x is less than $y. \n";
} elseif ($x > $y) {
    echo "$x is greater than $y. \n";
} elseif ($x === $y) {
    echo "$x and $y are equal. \n";
}

echo "\n-------Exercise 5------------------------\n";
// Exercise 5
/* Given variable (int) 50 create a condition that 
prints out "correct" if the variable is inside the range.
Range should be stored within the 2 separated variables $y and $z. */

$num4 = 50;
$yy = 36;
$zz = 99;

if ($num4 >= $yy && $num4 <= $zz) {
    echo "correct \n";
}

echo "\n--------Exercise 6-----------------------\n";
// Exercise 6
/* Create a variable $plateNumber that stores your car plate number.
Create a switch statement that prints out that its your car 
in case of your number. */

$plateNumber = "FJ-7070";

switch ($plateNumber) {
    case "FJ-7070":
        echo "This is your number!" . PHP_EOL;
        break;
}

echo "\n-------Exercise 7------------------------\n";
// Exercise 7
/* Create a variable $number with integer by your choice.
Create a switch statement that prints out text "low" if 
the value is under 50,
"medium" if the case is higher than 50 but lower than 100, "
high" if the value is >100. */

$number = 69;

switch ($number) {
    case $number < 50:
        echo "low";
    break;
    case $number > 50 && $number < 100:
        echo "medium";
    break;
    case $number > 100:
        echo "high";
    break;
}