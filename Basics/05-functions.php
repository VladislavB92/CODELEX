<?php

/*!
declare(strict_types = 1) at the beginning of the file
declares strict types in whole file. 
!*/

echo "\n--------Exercise 1-----------------------\n";
// Exercise 1
/* Create a function that accepts any string 
and returns the same value with added "codelex" by the end of it.
Print this value out. */

function prntStr($str) {
    return $str . "codelex" . PHP_EOL;

    //! If there is no "return in function, the output is "void".
}

echo prntStr("Go, ");

echo "\n--------Exercise 2-----------------------\n";
// Exercise 2
/* Create a function that accepts 2 integer arguments. 
First argument is a base value 
and the second one is a value its been multiplied by.
For example, given argument 10 and 5 prints out 50 */

function multiplyThis($int1, $int2) {
    return $int1 * $int2 . PHP_EOL;
}
echo multiplyThis(6, 9);

echo "\n-------Exercise 3------------------------\n";
// Exercise 3
/* Create a person object with name, 
surname and age. 
Create a function that will determine if the person has reached 18 years of age.
Print out if the person has reached age of 18 or not. */

$person = new stdClass();
$person->name = "Scnitzel";
$person->surname = "Puff";
$person->age = 69;

function isHeLegalAge($p) {
    if ($p->age >= 18) {
        return "You can drink and drive." . PHP_EOL;
    } else {
        return "Go back to school, boy!" . PHP_EOL;
    }
}

echo isHeLegalAge($person);

echo "\n-------Exercise 4------------------------\n";
// Exercise 4
/* Create a array of objects that uses the function of exercise 3 
but in loop printing out if the person has reached age of 18. */

$arnold = new stdClass();
$arnold->name = "Arnold";
$arnold->age = 70;

$pamela = new stdClass();
$pamela->name = "Pamela";
$pamela->age = 60;

$bobby = new stdClass();
$bobby->name = "Bobby";
$bobby->age = 15;

$people = [];
$people[] = $arnold;
$people[] = $pamela;
$people[] = $bobby;

function arePeopleLegalAge($p) {

        foreach ((array) $p as $people) {
            foreach ((array) $people->age as $age) {
                if ($age >= 18) {
                    echo "You can drink and drive, $people->name." . PHP_EOL;
                } else {
                    echo "Go back to mommy, $people->name!" . PHP_EOL;
                }
            }
        }
}

echo arePeopleLegalAge($people);

echo "\n-------Exercise 5------------------------\n";
// Exercise 5
/* Create a 2D associative array in 2nd dimension with fruits and their weight.
Create a function that determines if fruit has weight over 10kg.
Create a secondary array with shipping costs per weight. 
Meaning that you can say that over 10 kg shipping costs are 2 euros, 
otherwise its 1 euro.
Using foreach loop print out the values of the fruits 
and how much it would cost to ship this product. */

$fruits = [
    [
        "fruit" => "apples", 
        "weight" => 4
    ],
    [
        "fruit" => "oranges", 
        "weight" => 11
    ],
    [
        "fruit" => "grapes", 
        "weight" => 5
    ],
    [
        "fruit" => "kiwis", 
        "weight" => 15
    ],
];

$cost_per_kg = [
    [
        "less than 10 kg" => "shipping cost is 2 eur"
    ],
    [
        "more than 10 kg" => "shipping cost is 25 eur"
    ]
];

function isOverTenKilos($f, $shipping) {
    
    foreach ((array) $f as $fruit) {
        
        foreach ((array) $fruit["weight"] as $weight) {
            
            if ($weight > 10) {
                echo "Your parcel with " . $fruit["fruit"] . 
                " weighs " . $fruit["weight"] . " kilograms and " . 
                $shipping[1]["more than 10 kg"] . "." . PHP_EOL;
        
            } else {
            echo "Your parcel with " . $fruit["fruit"] . 
            " weighs " . $fruit["weight"] . " kilograms and "  . 
            $shipping[0]["less than 10 kg"] . "." . PHP_EOL;
        }
    }
}   
}

isOverTenKilos($fruits, $cost_per_kg);

echo "\n---------Exercise 6----------------------\n";
// Exercise 6
/* Create an non-associative array with 5 elements where 3 are integers, 
1 float and 1 string.
Create a for loop that iterates non-associative array using php in-built function 
that determines count of elements in the array.
Create a function that doubles the integer number.
Within the loop using php in-built function 
print out the double of the number value (using your custom function). */

$ex6_array = [69, 420, 3.14, "codelex"];

function doubleInt($int) {
    if (gettype($int) == "integer") {
       echo "$int times 2 is " . $int * 2 . PHP_EOL;
    }
}

for ($i = 0; $i < count($ex6_array); $i++) {
    doubleInt($ex6_array[$i]);
}

echo "\n--------Exercise 7-----------------------\n";
// Exercise 7
/* Imagine you own a gun store.
Only certain guns can be purchased with license types.
Create an object (person) that will be the requester to purchase a gun (object)
Person object has a name, valid licenses (multiple) & cash.
Guns are objects stored within an array.
Each gun has license letter, price & name.
Using PHP in-built functions determine if the requester (person) 
can buy a gun from the store. */

$person = new stdClass();
$person->name = "Michael Jackson";
$person->licence = ["Licence A", "Licence B"];
$person->cash_usd = 420;

$automatic = new stdClass();
$automatic->name = "Kalashnikov";
$automatic->licence = "Licence A";
$automatic->price_usd = 349;
$guns[] = $automatic;

$semiAutomatic = new stdClass();
$semiAutomatic->name = "Ruger Carbine";
$semiAutomatic->icence = "Licence B";
$semiAutomatic->price_usd = 449;
$guns[] = $semiAutomatic;

$nineMm = new stdClass();
$nineMm->name = "Glock";
$nineMm->licence = "Licence A";
$nineMm->price_usd = 120;
$guns[] = $nineMm;

// Using PHP in-built functions 
// determine if the requester (person) 
// can buy a gun from the store.

// Array filter as an optional built function.

function canBuy($requester, $store) {
    foreach ($store as $gun) {
        if ($requester->cash_usd >= $gun->price_usd &&
        $requester->licence[0] == $gun->licence) {
            echo "Yes, you can buy this $gun->name, gringo!" . PHP_EOL;
        } else {
            echo "No $gun->name for you, pal!" . PHP_EOL;
        }
    }
} 

canBuy($person, $guns);

