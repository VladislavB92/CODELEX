<?php

$user_choice = readline("\nType 'rock', 'paper', or 'scissors'. \n 
Your choice: ");

    $pc_choice = rand(1, 3);
    $pc_actual_choice = "";
    
    if ($pc_choice == 1) {
        $pc_actual_choice = "rock";
    } elseif ($pc_choice == 2) {
        $pc_actual_choice = "paper";
    } elseif ($pc_choice == 3) {
        $pc_actual_choice = "scissors";
    }

echo "Computer chooses " . $pc_actual_choice . PHP_EOL;

switch ($user_choice) {
    case $pc_actual_choice:
        echo "\nIt's a tie!\n";
    break;
    case $user_choice == "paper" && $pc_actual_choice == "rock" ||
    $user_choice == "rock" && $pc_actual_choice == "scissors" ||
    $user_choice == "scissors" && $pc_actual_choice == "paper":
        echo "\nYou win!\n";
    break;
    default:
    echo "\nYou loose!\n";
break;
}