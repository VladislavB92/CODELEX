<?php

// Exercise #5
/* Write a program that picks a random number from 1-100. 
Give the user a chance to guess it.
If they get it right, tell them so. 
If their guess is higher than the number, say "Too high."
If their guess is lower than the number, say "Too low." Then quit. 
(They don't get any more guesses for now.) */

$secret_number = rand(0, 101);
$player_guess = 0;
echo "\nGuess the number from 1 to 100.";

while ($secret_number != $player_guess) {
    $player_guess = readline("\nWhat number it might be?" . PHP_EOL);

    if ($secret_number == $player_guess) {
        echo "\nYou guessed!" . PHP_EOL;
    } elseif ($secret_number < $player_guess) {
        echo "\nToo high." . PHP_EOL;
    } elseif ($secret_number > $player_guess) {
        echo "\nToo low! It was $secret_number! Bye, looser!" . PHP_EOL;
        exit();
    }
} 