<?php

// Exercise #6
/* Write a program to play a word-guessing game like Hangman.
It must randomly choose a word from a list of words.
It must stop when all the letters are guessed.
It must give them limited tries and stop after they run out.
It must display letters they have already guessed 
(either only the incorrect guesses or all guesses). */

// Array of words.
$words = ["computer"];

// Choosing random word from the list.
$randomWord = $words[rand(0, count($words) - 1)];

// Splits randomly choosen word into single char arrays.
$splittedRandomWordArray = str_split($randomWord);
$hiddenSplittedRandomWordArray = $splittedRandomWordArray;

$hiddenChar = " _ ";

// print_r($splittedRandomWordArray);

$wordToGuessInString = implode("", $splittedRandomWordArray);
$win = false;

foreach ($hiddenSplittedRandomWordArray as &$letter) {
    $letter = $hiddenChar;
}

while ($win == false) {
    echo "Hidden\n";
    print_r($hiddenSplittedRandomWordArray);

    for ($i = 0; $letter <= count($hiddenSplittedRandomWordArray) - 1; $i++) {
        $input = readline("\nChoose letter: ");

        if ($splittedRandomWordArray[$i] == $input) {
            $hiddenSplittedRandomWordArray[$i] = $input;
            echo "\nCicle $i\n";
            echo "Hidden\n";
            print_r($hiddenSplittedRandomWordArray);
            echo "Open\n";
            print_r($splittedRandomWordArray);
        } elseif ($splittedRandomWordArray[$i] != $input) {

            echo "Wrong letter!\n";
            echo "Hidden\n";
            echo "\nCicle $i\n";
            print_r($hiddenSplittedRandomWordArray);
            echo "Open\n";
            print_r($splittedRandomWordArray);
        }

        // Determines win
        if ($splittedRandomWordArray == $hiddenSplittedRandomWordArray) {
            echo "You win!";
            $win = true;
            break;
        } else {
            $win = false;
        }
    }
}

echo "\n";










// 

// echo var_dump($activeGuessingWord) . PHP_EOL;

// $letter = "m";

// if (strpos($activeGuessingWord, $letter, $offset = 0) ) {
//     echo $letter;
//     echo "such letter exist";
// } else {
//     echo "no such letter";
// }
