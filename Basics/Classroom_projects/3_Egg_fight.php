<?php

$player_egg_count = readline("Enter your egg number: ");
$pc_egg_count = readline("Enter PC egg number: ");
$pc_score = 0;
$player_score = 0;

while ($player_egg_count > 0 && $pc_egg_count > 0) {
    $player_egg_hardness = rand(1, 2); // 1 = hard, 2 = soft
    $pc_eggs_hardness = rand(1, 2); // 1 = hard, 2 = soft

    if ($player_egg_hardness > $pc_eggs_hardness) {
        echo "\nPC egg cracked! You win!" . PHP_EOL;
        $pc_egg_count--;
        $player_score++;

        echo "Your score: $player_score || PC score: $pc_score" . PHP_EOL;
    } elseif ($player_egg_hardness < $pc_eggs_hardness) {
        echo "\nYour egg cracked! PC wins!" . PHP_EOL;
        $player_egg_count--;
        $pc_score++;

        echo "Your score: $player_score || PC score: $pc_score" . PHP_EOL;
    }
}

if ($pc_score < $player_score) {
    echo "\nCONGRATULATIONS! YOU ARE THE EGG MASTER! MAY YOUR EGGS BE STRONG FOREVER!\n";
} elseif ($pc_score > $player_score) {
    echo "\nBOO! CHOOSE YOUR EGGS CAREFULLY NEXT TIME!\n";
} else {
    echo "\nIT'S A DRAW! YOUR EGGS ARE EQUALY STRONG!\n";
}
