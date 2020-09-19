<?php

// Two players, X and Y
// One underscore "_" is 1km
// Each player has random speed
// When one player moves 1km, his speed and distance is outputted
// When one player gets to finish, he is declared as a winner

abstract class Runners
{
    public abstract function getName(): string;
    public abstract function getSpeed(): float;
}

class Runner extends Runners
{
    private string $name;
    private float $speed; // m/s

    public function __construct($name, $speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }
}

$runner1 = new Runner("X", 10.0);
$runner2 = new Runner("0", 9.2);

$field1 = ["_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_"];
$field2 = ["_", "_", "_", "_", "_", "_", "_", "_", "_", "_", "_"];

$hundredMeters = "_";

// Set starting possition
if ($field1 == true && $field2 == true) {
    array_unshift($field1, $runner1->getName());
    array_unshift($field2, $runner2->getName());
}

$playerPosition = 0;

while(

)



// Defines movement
// for ($i = 0; $i <= count($field1); $i++) {
//     $field1[$i] = $runner1->getName();
//     $field1[$i - 1] = "_";

//     echo implode(" ", $field1) . PHP_EOL;

//     if ($i > count($field1)) {
//         break;
//     }
//     sleep(1);

//     for ($j = 0; $j <= count($field2); $j++) {
//         $field2[$j] = $runner2->getName();
//         $field2[$i - 1] = "_";

//         echo implode(" ", $field2) . PHP_EOL;
//         if ($j > count($field2)) {
//             break;
//         }
//         sleep(1);
//     break;
//     }
// }
