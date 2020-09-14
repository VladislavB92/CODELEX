<?php

// Guess the computer's number.

$secret_number = rand(0, 101);
$player_option = 0;

while ($secret_number != $player_option) {
    $player_option = readline("\nWhat number it is?" . PHP_EOL);

    if ($secret_number == $player_option) {
        echo "\nYou guessed!" . PHP_EOL;
    } elseif ($secret_number < $player_option) {
        echo "\nTry lower" . PHP_EOL;
    } elseif ($secret_number > $player_option) {
        echo "\nTry higher!" . PHP_EOL;
    }
}
