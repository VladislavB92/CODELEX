<?php

// Exercise 4
/* Write a console program in a class named FizzBuzz that prompts the user for an integer,
then prints all of the numbers from one to that integer, separated by spaces.
Use a loop to print the numbers.
But for multiples of three, print "Fizz" instead of the number, and for the multiples of five print "Buzz".
For numbers which are multiples of both three and five print "FizzBuzz".
Drop to a new line after print each 20 numbers.
 */

class FizzBuzz
{
    public $limit;

    function __construct($limit)
    {
        $this->limit = $limit;
    }

    function printNumbers()
    {
        for ($i = 1; $i <= $this->limit; $i++) {

            if ($i % 15 == 0) {
                echo " FizzBuzz ";
            }
            if ($i % 3 == 0) {
                echo " Fizz ";
            }
            if ($i % 5 == 0) {
                echo " Buzz ";
            }
            if ($i % 15 != 0 && $i % 3 != 0 && $i % 5 != 0) {
                echo " $i ";
            }
            if ($i % 20 == 0) {
                echo "\n";
            }
        }
    }
}

echo "\n---- Welcome to FizzBuzz! ----\n";
$limit_input = readline("\nEnter the limit of FizzBuzz: ");
$fizzBuzz1 = new FizzBuzz($limit_input);
echo $fizzBuzz1->printNumbers() . PHP_EOL;
