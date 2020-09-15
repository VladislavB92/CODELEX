<?php

// Exercise #4
/* Write a program that creates an array of ten integers.
It should put ten random numbers from 1 to 100 in the array.
It should copy all the elements of that array into another array of the same size.
Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.

- Create an array of ten integers
- Fill the array with ten random numbers (1-100)
- Copy the array into another array of the same capacity
- Change the last value in the first array to a -7
- Display the contents of both arrays

Example output:
Array 1: 45 87 39 32 93 86 12 44 75 -7
Array 2: 45 87 39 32 93 86 12 44 75 50
*/

$array1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
$array2 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];


for ($i = 0; $i <= count($array1); $i++) {
    $random_gen = rand(1, 100); // Generates random number.
    array_shift($array1); // Deletes element from the beginning.
    array_push($array1, $random_gen); // Adds element at the end.

    for ($c = 0; $c <= count($array2); $c++) {
        array_shift($array2); // Deletes element from the beginning.

        if ($c < count($array1)) {
            array_push($array2, $array1[$c]);
        } elseif ($c == count($array1)) {
            array_push($array2, rand(1, 100));
        }
    }

    if ($i == count($array1)) {
        array_shift($array1);
        array_push($array1, -7);
    }
}

echo "Array1: " . implode(" ", $array1) . PHP_EOL;
echo "Array2: " . implode(" ", $array2) . PHP_EOL;
