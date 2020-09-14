<?php

// Exercise #2
/* Enter the number and find out wether the number is positive or negative. */

echo "\nEnter the number and find out whether it's positive or negative! Fun, isn't it? Ehh... :(";
$num = "";

while ($num != "exit") {
    $num = readline("\nEnter your number or type 'exit'\n");
    if ($num > 0) {
        echo "\nOh gosh, it's... it is... $num IS A POSITIVE NUMBER!!!\n";
    } elseif ($num < 0) {
        echo "\nOh no, it's a negative number! We don't need such a negativity in here! :(\n";
    } elseif ($num = "exit") {
        exit("\nBye!\n");
    } else {
        echo "\nWrong number. Try again!\n";
    }
}
