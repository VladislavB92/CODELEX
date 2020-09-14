<?php

// Exercise #5
/*On your phone keypad, the alphabets are mapped to digits as follows: 
ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
Write a program called PhoneKeyPad, 
which prompts user for a String (case insensitive), 
and converts to a sequence of keypad digits.

Use:
a "nested-if" statement
a "switch-case-default" statement

Hint: In switch-case, you can handle multiple cases 
by omitting the break statement, e.g., */

$keypad = "\n  CA      C     EXIT
(1)     ABC(2)  DEF(3)\nGHI(4)  JKL(5)  MNO(6)\nPQRS(7) TUV(8) WXYZ(9)
       space(0)\n";

echo "\nType an SMS like in the ol' good times!";
echo "\nThis is your brand new Nokia 3310 keypad:\n";
echo "\nOptions to type:\nCA - clears all digits\n";
echo "C - clears last digit\n";
echo "EXIT - exits the SMS programm";

$input = "";
$text_memory = [];

while ($input != "EXIT") {
    echo "\n$keypad";
    echo "\nType here: ";
    $input = readline("\n");
    switch ($input) {
        case "2":
            $text_memory[] = "a";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "22":
            $text_memory[] = "b";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "222":
            $text_memory[] = "c";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "3":
            $text_memory[] = "d";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "33":
            $text_memory[] = "e";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "333":
            $text_memory[] = "f";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "4":
            $text_memory[] = "g";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "44":
            $text_memory[] = "h";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "444":
            $text_memory[] = "i";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "5":
            $text_memory[] = "j";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "55":
            $text_memory[] = "k";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "555":
            $text_memory[] = "l";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "6":
            $text_memory[] = "m";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "66":
            $text_memory[] = "n";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "666":
            $text_memory[] = "o";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "7":
            $text_memory[] = "p";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "77":
            $text_memory[] = "q";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "777":
            $text_memory[] = "r";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "7777":
            $text_memory[] = "s";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "8":
            $text_memory[] = "t";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "88":
            $text_memory[] = "u";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "888":
            $text_memory[] = "v";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "9":
            $text_memory[] = "w";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "99":
            $text_memory[] = "x";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "999":
            $text_memory[] = "y";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "9999":
            $text_memory[] = "z";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "0":
            $text_memory[] = " ";
            echo "Your text: " . implode("", $text_memory);
            break;
        case "CA":
            $text_memory = [];
            echo "Your text: " . implode("", $text_memory);
            break;
        case "C":
            array_pop($text_memory);
            echo "Your text: " . implode("", $text_memory);
            break;
        case "EXIT":
            exit("Your Nokia 3310 is shutting down. Bye!\n");
        default:
            echo "No such key";
            break;
    }
}
