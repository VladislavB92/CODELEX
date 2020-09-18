<?php

// Exercise #6
/* Write a program to play a word-guessing game like Hangman.
It must randomly choose a word from a list of words.
It must stop when all the letters are guessed.
It must give them limited tries and stop after they run out.
It must display letters they have already guessed 
(either only the incorrect guesses or all guesses). */

$file = 'files/words.csv';

// Array of words.
if (($handle = fopen($file, "r")) !== FALSE) {
    while (($word = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $words = $word;
    }
    fclose($handle);
}

// Choosing random word from the list.
$randomWord = $words[rand(0, count($words) - 1)];

// Splits randomly choosen word into single char arrays.
$splittedRandomWordArray = str_split($randomWord);

// A copy of splitted word array for hiding letters and comparing.
$hiddenSplittedRandomWordArray = $splittedRandomWordArray;

// Misc var.
$hiddenChar = " _ ";
$misses = [];
$missCount = 0;
$end = false;

foreach ($hiddenSplittedRandomWordArray as &$letter) {
    $letter = $hiddenChar;
}

echo "\n-=-=WELCOME TO THE 'GUESS THE WORD!'=-=-\n";
echo "\nGAME RULES:\n";
echo "\n=You have 5 tries to guess the word.\n";
echo "=After 5th wrong try you will have a choice\n";
echo "=to delete the incorrect letter archive\n";
echo "=and play again, or give up and see the word!\n";
sleep(3);


while ($end == false) {
    echo "\n-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
    echo "\n";
    echo "Word: " . implode(" ", $hiddenSplittedRandomWordArray) . PHP_EOL;
    echo "\nMisses: " . implode("", $misses) . PHP_EOL;
    $input = readline("\nGuess: ");

    // If input is present in the array...
    if (in_array($input, $splittedRandomWordArray)) { //returns bool {

        // Search the indexes of the input in this array.
        $keys = array_keys($splittedRandomWordArray, $input); // Returns indexes (keys).

        foreach ($keys as &$letter) {
            $hiddenSplittedRandomWordArray[$letter] = $input;
        }

        echo "\nCORRECT!\n";
    } elseif (!in_array($input, $splittedRandomWordArray)) {
        $misses[] = $input; // Adds wrong letters to misses.
        $missCount++;
        echo "\nWrong letter!\n";

        // Restarts guessing.
        if ($missCount > 4) {
            echo "\nOUT OF TRIES!\nYOU LOST!\n";
            $playAgain = readline("\nGive up? y/n ");
            if ($playAgain === "n") {
                $missCount = 0;
                $misses = [];
            } elseif ($playAgain === "y") {
                echo "The correct word was: " . implode(" ", $splittedRandomWordArray)
                    . PHP_EOL;
                exit("\nBye!\n");
            }
        }
    }

    // Determines win.
    if ($splittedRandomWordArray == $hiddenSplittedRandomWordArray) {
        echo implode(" ", $hiddenSplittedRandomWordArray) . PHP_EOL;
        echo "\nYOU WIN!\n";
        echo "\nThe correct word is: " . implode(" ", $hiddenSplittedRandomWordArray) . PHP_EOL;

        $end = true;
        break;
    } else {
        $end = false;
    }
}

echo "\n";
