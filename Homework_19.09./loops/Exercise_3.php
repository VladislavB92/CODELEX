<?php

// Exercise #3
/* Write a program that asks the user to enter two words. 
The program then prints out both words on one line.
The words will be separated by enough dots 
so that the total line length is 30:

Enter first word:
turtle
Enter second word
153
turtle....................153

This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.
*/


$frst_word = readline("\nEnter the first word: ");
$scnd_word = readline("\nEnter the second word: ");
$dot = "";
$line_lngth = strlen($frst_word) + strlen($dot) + strlen($scnd_word);
$output = $frst_word . $dot . $scnd_word;
// echo $line_lngth;
echo $frst_word;
while ($line_lngth != 30) {

    echo ".";
    $line_lngth++;
}
echo $scnd_word . PHP_EOL;
echo "Upper line contains $line_lngth characters\n";
