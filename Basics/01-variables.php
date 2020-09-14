<?php

echo "\n--------Exercise 1-----------------------\n";
// Exercise 1
/* Create variable that prints out an integer 10, 
float 10.10, string "hello world" */

$int1 = 10;
$float1 = 10.10;
$string1 = "Hello, world!";

echo $int1 . "\n";
echo $float1 . "\n";
echo $string1 . "\n";

echo "\n--------Exercise 2-----------------------\n";
// Exercise 2
/* Dump the same values that should 
display both data type & its value. 
(Note, usage of var_dump) */

var_dump($int1, $float1, $string1);
// Can write all three variables in one var_dump().

echo "\n--------Exercise 3-----------------------\n";
// Exercise 3
/* Concatenate your name, surname and integer of your age. */

$my_name = "Vladislavs";
$my_sur = "Buzinskis";
$my_age = 28;

echo "$my_name $my_sur, $my_age";
// Alternate: echo $my_name . " " . $my_sur . ", age: " . $my_age;
// In case of double qoutes " " it is possible to enter variables directly in them.


