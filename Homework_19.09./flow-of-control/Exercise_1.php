<?php

// Exercise #1
/* Print the largest number out of three. */

$try_again = "";

echo "\nThis programm will determine the largest number out of three.\n";

while ($try_again != "n") {

    $num_array = [];
    $first_num = readline("\nInput the first number: ");
    $num_array[] = $first_num;
    $second_num = readline("input the second number: ");
    $num_array[] = $second_num;
    $third_num = readline("Input the third number: ");
    $num_array[] = $third_num;
    $largest = max($num_array);

    echo "\nThe largest number is " . $largest . PHP_EOL;

    $try_again = readline("\nTry again? (y/n) ");

    if ($try_again == "n") {
        exit("Bye!\n");
    }
}
