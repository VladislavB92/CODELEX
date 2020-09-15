<?php

// Exercise #8
/* Write a console program in a class named NumberSquare that prompts the user for two integers,
a min and a max, and prints the numbers in the range from min to max inclusive in a square pattern.
Each line of the square consists of a wrapping sequence of integers increasing from min and max.
The first line begins with min, the second line begins with min + 1, and so on.
When the sequence in any line reaches max, it wraps around back to min.
You may assume that min is less than or equal to max. Here is an example dialogue:

Min? 1
Max? 5
12345
23451
34512
45123
51234
*/

class NumberSquare
{
    public $min;
    public $max;

    function receiveInput()
    {
        $this->min = readline("\nEnter minimal range: ");
        $this->max = readline("\nEnter maximal range: ");

        for ($i = 0; $i <= $this->max - 1; $i++) {
            // While $i is less or equal than 5

            for ($numbers = $this->min; $numbers <= $this->min + $this->max - 1; $numbers++) {

                if ($numbers <= $this->max) {
                    echo $numbers;
                } elseif ($numbers > $this->max) {
                    echo ($numbers - $this->max);
                }
            }
            echo "\n";
            $this->min++;
        }
    }
}

$number_square = new NumberSquare();
$number_square->receiveInput();
