<?php

echo "\n--------Exercise 1-----------------------\n";
// Exercise 1
/* Create an array with integers (up to 10) 
and print them out using foreach loop. */

$num_array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($num_array as $number) {
    echo $number . "\n";
}

echo "\n-------Exercise 2------------------------\n";
// Exercise 2
/* Create an array with integers (up to 10) 
and print them out using for loop. */

$arr1 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < count($arr1); $i++) {
    echo $arr1[$i] . "\n";
}
// "\n" is equal to PHP_EOL.

echo "\n--------Exercise 3-----------------------\n";
// Exercise 3
/* Given variable $x = 1 while $x is lower than 10, 
print out text "codelex". 
(Note: To avoid infinite looping, 
after each print increase the variable $x by 1) */

$x = 1;

while ($x < 10) {
    echo "codelex" . PHP_EOL;
    $x++;
}

echo "\n------Exercise 4-------------------------\n";
// Exercise 4
/* Create a non associative array with integers 
and print out only integers that divides by 3 without any left. */

$buzz = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];

foreach ($buzz as $fizz) {
    if ($fizz % 3 == 0) {
        echo "$fizz can be divided by 3" . PHP_EOL;
    } else {
        echo $fizz . PHP_EOL;
    }
}

echo "\n-------Exercise 5------------------------\n";
// Exercise 5
/* Create an associative array with objects of multiple persons.
Each person should have a name, surname, age and birthday. 
Using loop (by your choice) print out every persons personal data. */

$hollywood = [
    [
        "name" => "Arnold",
        "surname" => "Schwarzeneger",
        "age" => 70,
        "birthday" => "09.03.1948."
    ],
    [
        "name" => "Pamela",
        "surname" => "Anderson Lee",
        "age" => 60,
        "birthday" => "23.12.1955."
    ],
    [
        "name" => "Silvester",
        "surname" => "Stallone",
        "age" => 73,
        "birthday" => "30.06.1945."
    ]
];

for ($i = 0; $i < count($hollywood); $i++) {
    print_r($hollywood[$i]) . PHP_EOL;
}
