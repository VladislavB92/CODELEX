<?php

// Exercise #6
/* Write a program to play a word-guessing game like Hangman.
It must randomly choose a word from a list of words.
It must stop when all the letters are guessed.
It must give them limited tries and stop after they run out.
It must display letters they have already guessed 
(either only the incorrect guesses or all guesses). */

// Array of words.
$words = ["hangman"];

// Choosing random word from the list.
$randomWord = $words[rand(0, count($words) - 1)];

// Splits randomly choosen word into single char arrays.
$splittedRandomWordArray = str_split($randomWord);
$hiddenSplittedRandomWordArray = $splittedRandomWordArray;

$hiddenChar = " _ ";

$win = false;

foreach ($hiddenSplittedRandomWordArray as &$letter) {
    $letter = $hiddenChar;
}


while ($win == false) {
    echo "\n";
    echo implode(" ", $hiddenSplittedRandomWordArray) . PHP_EOL;
    print_r($hiddenSplittedRandomWordArray);
    $input = readline("\nChoose letter: ");
    $key = array_search($input, $splittedRandomWordArray); // Returns index (key).

    // If input is present in the array...
    if (in_array($input, $splittedRandomWordArray)) {
        
        // Search the index of the input in this array
        
        echo $key;
        $hiddenSplittedRandomWordArray[$key] = $input;
        echo "CORRECT!\n";
        
        
    } elseif (in_array($input, $splittedRandomWordArray) == false) {

        echo "\nWrong letter!\n";

    }

    // Determines win
    if ($splittedRandomWordArray == $hiddenSplittedRandomWordArray) {
        echo "\nYOU WIN!\n";
        echo "\nThe correct word is: " . implode(" ", $hiddenSplittedRandomWordArray) . PHP_EOL;

        $win = true;
        break;
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