<?php

echo "\n--------Exercise 1----------------------\n";
// Exercise 1
/* Create a non-associative array with 3 integer values 
and display the total sum of them. */

$array1 = [69, 420, 666];

echo "The sum of the array is " . 
($array1[0] + $array1[1] + $array1[2]) . "\n";

echo "\n--------Exercise 2-----------------------\n";
// Exercise 2
//Using dump method, dump out all 3 values.

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person);

echo "\n-------Exercise 3------------------------\n";
// Exercise 3
// Using dump method, dump out all 3 values.
// stdClass() is a demo PHP object.

$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->surname = 50;

var_dump($person);

echo "\n--------Exercise 4-----------------------\n";
// Exercise 4
// Program should display concatenated value of - Jane Doe 41

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][1]["name"] . " " .
$items[0][1]["surname"] . " " .
$items[0][1]["age"] . PHP_EOL;

echo "\n---------Exercise 5----------------------\n";
// Exercise 5
// Program should display concatenated value of - John & Jane Doe`s

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][0]["name"] . " & " . 
$items[0][1]["name"] . " " .
$items[0][0]["surname"] . "s" . PHP_EOL;