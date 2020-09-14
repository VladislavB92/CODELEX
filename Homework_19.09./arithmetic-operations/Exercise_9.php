<?php

// Exercise #9
/* 
Write a program that calculates and displays a person's body mass index (BMI).
A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
Where weight is measured in pounds and height is measured in inches.
Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
If the BMI is less than 18.5, the person is considered underweight.
If the BMI value is greater than 25, the person is considered overweight.
Your program must accept metric units.
*/

$metric_weight = "kilograms";
$metric_height = "meters";
$imperial_weight = "pounds";
$imperial_height = "inches";
$metric_or_imperial = "";

function printAdvice($bmi)
{
    if ($bmi > 25) {
        echo "You are overweight! Eat less and no beers on Friday for you for now!\n";
    } elseif ($bmi < 25 && $bmi > 18.5) {
        echo "You're cool. Enjoy your Big Mac!\n";
    } elseif ($bmi < 18.5) {
        echo "Man, you should bulk up! Beware of wind!\n";
    }
}

while ($metric_or_imperial != "m" || $metric_or_imperial != "i") {

    $metric_or_imperial = readline("Please, choose your measurement unit. Metric or imperial: (type 'm' or 'i')\n");

    if ($metric_or_imperial == "m") {
        $mass = readline("Enter your weight in $metric_weight: ");
        $height = readline("\nEnter your height in $metric_height: ");
        $bmi = ($mass / ($height * $height));
        echo "Your BMI is " . round($bmi, 2) . PHP_EOL;
        printAdvice($bmi);
        exit("Bye!\n");
    } elseif ($metric_or_imperial == "i") {
        $mass = readline("Enter your weight in $imperial_weight: ");
        $height = readline("\nEnter your height in $imperial_height: ");
        $bmi = ($mass / ($height * $height)) * 703;
        echo "Your BMI is " . round($bmi, 2) . PHP_EOL;
        printAdvice($bmi);
        exit("Bye!\n");
    } else {
        echo "Invalid input. Try again.\n";
    }
}
