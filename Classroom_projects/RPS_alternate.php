<?php

declare(strict_types=1);

// 0 = rock
// 1 = paper
// 2 = scissors

$combinations = [
    0 => 2,
    1 => 0,
    2 => 1,
];

$input = (int) readline("Enter 0 = Rocket, 1 = Paper, 2 = Scissors  : ");
$pc_player = rand(0, 2);
echo "Computer choose $pc_player" . PHP_EOL;

if ($input === $pc_player) {
    echo "DRAW";
} elseif ($combinations[$input] == $pc_player) {
    echo "You win!";
} else {
    echo "You lose!";
}
