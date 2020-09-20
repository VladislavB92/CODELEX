<?php

// Two players, X and Y
// One underscore "_" is 1km
// Each player has random speed
// When one player moves 1km, his speed and distance is outputted
// When one player gets to finish, he is declared as a winner

$field1 = ["_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_"];
$field2 = ["_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_"];


$player1 = "X";
$player2 = "O";
$position1 = 0;
$position2 = 0;
$speed1 = rand(1, 4);
$speed2 = rand(1, 4);
$finishLine = false;

while ($finishLine == false) {

    $field1[$position1] = $player1;
    $field2[$position2] = $player2;

    echo "Track 1 | " . implode(" ", $field1) . PHP_EOL;
    echo "Track 2 | " . implode(" ", $field2) . PHP_EOL;
    echo "\n";

    $position1 += $speed1;
    $position2 += $speed2;
    
    $field1[$position1 - $speed1] = "_";
    $field2[$position2 - $speed2] = "_";

    if ($position1 > 21 && $position2 < 21) {
        echo "The winner is $player1!\n";
        $finishLine = true;
    } elseif ($position1 < 21 && $position2 > 21) {
        echo "The winner is $player2!\n";
        $finishLine = true;
    } elseif ($position1 > 21 && $position2 > 21) {
        echo "It's a tie!\n";
        $finishLine = true;
    }
    
    sleep(1);

}
