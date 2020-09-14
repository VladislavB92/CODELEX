<?php

declare(strict_types=1);

// Exercise #2
/* Write a program called CheckOddEven 
which prints "Odd Number" if the int variable “number” is odd,
or “Even Number” otherwise. 
The program shall always print “bye!” before exiting. */

function checkOddEven(): void
{
    $int = readline("\n Type 'exit' to quit or enter a number: ");

    while ($int !== "exit") {
        if ($int % 2 > 0) {
            echo "Odd Number" . PHP_EOL;
            $int = readline("\nEnter a number: ");
        } else {
            echo "Even Number" . PHP_EOL;
            $int = readline("\nEnter a number: ");
        }
    }
    exit("Bye!" . PHP_EOL);
}

checkOddEven();
