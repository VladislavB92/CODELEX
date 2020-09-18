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

while ($win == false) {


    for ($i = 0; $i <= count($splittedRandomWordArray) - 1; $i++) {
        
        $hiddenSplittedRandomWordArray[$i] = $hiddenChar;
        print_r($hiddenSplittedRandomWordArray);

        for ($letter = 0; $letter <= count($splittedRandomWordArray) - 1; $letter++) {
            $input = readline("\nChoose letter: ");
            if ($input == $splittedRandomWordArray[$letter]) {
                $hiddenSplittedRandomWordArray[$i] = $input;
                print_r($hiddenSplittedRandomWordArray);
                break;
            } else {
                $hiddenSplittedRandomWordArray[$i] = $hiddenChar;
                echo "Wrong letter!\n";
                break;
            }
        }
        break;
    }


    if ($splittedRandomWordArray == $hiddenSplittedRandomWordArray) {
        echo "You win!";
        $win = true;
    } else {
        $win = false;
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
