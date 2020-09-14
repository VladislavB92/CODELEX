<?php

// PC guesses the player's number

$pc_guess = 0;
$try_count = 0;
$your_number = 0;
$min_range = 0;
$max_range = 100;

$your_number = readline("Enter your number from 1 to 99: ");
$try_count = intval(readline("How many times the computer can try? : "));

while ($your_number !== $pc_guess && $try_count > 0) {
    $pc_guess = rand($min_range, $max_range);
    
    echo "\nTry: $try_count | Your number is $your_number | Computer says $pc_guess";
    
    $try_count--;
    
    if ($your_number == $pc_guess){
        echo "\nCOMPUTER GUESSED!\n";
    break;

    } elseif ($try_count == 0) {
        echo "\nOUT OF TRIES! COMPUTER LOST!\n";
    }
    else {
        echo "\nComputer failed and will try again.\n";
    } 
}