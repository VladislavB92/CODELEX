<?php

// Exercise #3
/*Write a program that reads an positive integer 
and count the number of digits the number has. */

echo "\nThis programm will count how many digits is in the number you typed.\n";
$num = "";

while ($num != "exit") {
    $num = readline("\nEnter you number or type 'exit': ");
    $num_as_int = (int) $num;
    $num_str_len = strlen($num);
    
    if ($num_as_int > 0) {
        echo "Your number contain of $num_str_len digits.\n";
    } elseif ($num_as_int < 0) {
        echo "\nYou must enter a positive number!\n";
    } elseif (is_numeric($num_as_int) != true) {
        echo "\nThis is not a number!";
    } elseif ($num == "exit") {
        exit("Bye!\n");
    }
}