<?php

// Two players, X and Y
// One underscore "_" is 1km
// Each player has random speed
// When one player moves 1km, his speed and distance is outputted
// When one player gets to finish, he is declared as a winner


$fieldLength = rand(50, 90);
$field1 = [];

for ($i = 0; $i < $fieldLength; $i++) {
    array_push($field1, "_");
}
$field2 = $field1;

$player1 = "X";
$player2 = "O";
$position1 = 0;
$position2 = 0;

$finishLine = false;

while ($finishLine == false) {
    $speed1 = rand(1, 5);
    $speed2 = rand(1, 5);

    $field1[$position1] = $player1;
    $field2[$position2] = $player2;

    echo "Track 1 | " . implode(" ", $field1) . PHP_EOL;
    echo "Track 2 | " . implode(" ", $field2) . PHP_EOL;
    echo "\n";

    $position1 += $speed1;
    $position2 += $speed2;

    $field1[$position1 - $speed1] = "_";
    $field2[$position2 - $speed2] = "_";

    if ($position1 > $fieldLength && $position2 < $fieldLength) {
        echo implode(" ", $field1) . "The winner is $player1!\n";
        echo "Track 2 | " . implode(" ", $field2) . PHP_EOL;
        $finishLine = true;
    } elseif ($position1 < $fieldLength && $position2 > $fieldLength) {
        echo "Track 1 | " . implode(" ", $field1) . PHP_EOL;
        echo implode(" ", $field2) . "The winner is $player2!\n";
        $finishLine = true;
    } elseif ($position1 > $fieldLength && $position2 > $fieldLength) {
        echo "It's a tie!\n";
        $finishLine = true;
    }

    sleep(1);
}
