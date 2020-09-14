<?php

// Exercise #4
/* Write a program which prints “Sunday”, “Monday”, ... “Saturday” 
if the int variable "dayNumber" is 0, 1, ..., 6, respectively.  
Otherwise, it shall print "Not a valid day".
Use:
a "nested-if" statement
a "switch-case-default" statement. */

$day_number = "";

while ($day_number != "exit") {
    $day_number = readline("\nEnter the corresponding number of the day of the week: ");

    switch ($day_number) {
        case '1':
            echo "It's Monday! :(\n";
            break;
        case '2':
            echo "It's Tuesday!\n";
            break;
        case '3':
            echo "It's Wednesday!\n";
            break;
        case '4':
            echo "It's Thursday!\n";
            break;
        case '5':
            echo "It's Friday! :)\n";
            break;
        case '6':
            echo "It's Saturday!\n";
            break;
        case '7':
            echo "It's Sunday!\n";
            break;
        case 'exit':
            exit("Bye!\n");
        default:
            echo "Not a valid day\n";
    }
}
