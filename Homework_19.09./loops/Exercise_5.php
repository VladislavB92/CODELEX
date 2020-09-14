<?php

// Exercise #5
/* Write a console program in a class named Piglet 
that implements a simple 1-player dice game
called "Piglet" (based on the game "Pig"). 
The player's goal is to accumulate as many points
as possible without rolling a 1. 
Each turn, the player rolls the die; 
- if they roll a 1,
the game ends and they get a score of 0. 
- Otherwise, they add this number to their running total score.
The player then chooses whether to roll again, 
or end the game with their current point total.
Here is an example dialogue where the user plays until rolling a 1, 
which ends the game with 0 points:

Welcome to Piglet!
You rolled a 5!
Roll again? yes
You rolled a 4!
Roll again? yes
You rolled a 1!
You got 0 points.
*/

class PigLet
{
    public $total_score;
    public $dice;
    public $answer;

    function rollTheDice()
    {
        $this->answer = readline("\nRoll the dice? y/n ");
        if ($this->answer == "y") {
            $this->dice = rand(1, 6);
            echo "\nYou rolled $this->dice!";
        } elseif ($this->answer == "n") {
            echo "----Game over!\n----You've got $this->total_score points!\n";
            $this->dice = exit("Bye!\n");
        }
        return $this->dice;
    }

    function calculateScore()
    {
        $this->total_score = 0;
        while ($this->dice != 1) {
            $this->rollTheDice();
            if ($this->dice > 1) {
                $this->total_score += $this->dice;
                echo "\nYour total score is $this->total_score\n";
            } elseif ($this->dice == 1) {
                $this->total_score = 0;
                echo "\n----You lose!\n----You've got $this->total_score points!\n";
            }
        }
    }
}

echo "\n---- Welcome to PigLet! ----\n";
echo "\nYour goal is to accumulate as many points
as possible without rolling a 1.\n";
echo "If you roll a 1, your points go to 0!\n";
echo "Know thge risk!\nLet's begin?\n";

$pigLet = new PigLet();
$pigLet->calculateScore();
