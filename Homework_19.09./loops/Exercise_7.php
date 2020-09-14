<?php

// Exercise 7
/* Write a console program in a class named RollTwoDice 
that prompts the user for a desired sum,
then repeatedly rolls two six-sided dice 
(using a Random object to generate
random numbers from 1-6) until the sum of the two dice values is the desired sum.
Here is the expected dialogue with the user: 

Desired sum: 9
4 and 3 = 7
3 and 5 = 8
5 and 6 = 11
5 and 6 = 11
1 and 5 = 6
6 and 3 = 9
*/

class RollTwoDice
{
    public $desired_sum;
    public $dice1;
    public $dice2;
    public $score;
    public $try;

    function calculateScore()
    {
        $this->desired_sum = readline("\nEnter your desired sum of dices: ");

        while ($this->score != $this->desired_sum) {
            $this->try++;
            $this->rollDice();
            if ($this->score == $this->desired_sum) {
                echo "\nYOU WON WITH $this->try THROWS!\n";
            }
        }
    }

    function rollDice()
    {
        echo "\nThrow $this->try";
        $this->dice1 = rand(1, 6);
        $this->dice2 = rand(1, 6);
        $this->scoRre = $this->dice1 + $this->dice2;

        echo "\n$this->dice1 and $this->dice2 is $this->score\n";
        return $this->score;
    }
}


echo "\nWelcome to the dice game!\n";

$game = new RollTwoDice();
$game->calculateScore();
