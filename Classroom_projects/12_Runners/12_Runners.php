<?php

// Two players, X and O
// Each player has random speed
// When one player moves 1 div, his speed and distance is printed
// When one player gets to finish, he is declared as a winner

include 'Track.php';
include 'Runner.php';

$track1 = new Track(rand(50, 70));
$track2 = new Track(rand(50, 70));

$trackX = $track1->getTrack();
$trackO = $track2->getTrack();
$finishLine = $track1->getFinishLine();
$trackLength = $track1->getTrackLength();

$runner1 = new Runner("X");
$runner2 = new Runner("O");

$runnerX = $runner1->getName();
$runnerO = $runner2->getName();
$positionX = $runner1->getPos();
$positionO = $runner2->getPos();

for ($i = 0; $i < $trackLength; $i++) {
    array_push($trackX, "_");
    array_push($trackO, "_");
}

while ($finishLine === false) {
    $speed1 = $runner1->changeSpeed();
    $speed2 = $runner2->changeSpeed();

    $trackX[$positionX] = $runnerX;
    $trackO[$positionO] = $runnerO;

    echo "Track 1 | " . implode(" ", $trackX) .
        " | Runner " . $runner1->getName() . " speed: " . $runner1->getSpeed()
        . PHP_EOL;

    echo "Track 2 | " . implode(" ", $trackO) .
        " | Runner " . $runner2->getName() . " speed: " . $runner2->getSpeed()
        . PHP_EOL;
    echo "\n";

    $positionX += $speed1;
    $positionO += $speed2;

    $trackX[$positionX - $speed1] = "_";
    $trackO[$positionO - $speed2] = "_";

    if ($positionX > $trackLength && $positionO < $trackLength) {
        echo implode(" ", $trackX) . "The winner is $runnerX!\n";
        echo "Track 2 | " . implode(" ", $trackO) . PHP_EOL;
        $finishLine = true;
    } elseif ($positionX < $trackLength && $positionO > $trackLength) {
        echo "Track 1 | " . implode(" ", $trackX) . PHP_EOL;
        echo implode(" ", $trackO) . "The winner is $runnerO!\n";
        $finishLine = true;
    } elseif ($positionX > $trackLength && $positionO > $trackLength) {
        echo "It's a tie!\n";
        $finishLine = true;
    }

    sleep(1);
}
