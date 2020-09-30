<?php

require_once 'RandomNumberGenerator.php';
require_once 'MathLogic.php';
require_once 'NumberStorage.php';

$randomNumber = new RandomNumberGenerator();
$math = new MathtLogic();
$storage = new NumberStorage();
$allNumbers = [];

while ($math->getCount() < 50) {
    $randomNumber->setRandNum(rand(1, 1000));
    $storage->storeTemporaryNumber($randomNumber->getRandNum());

    $numLog = fopen("Random_num_collection.txt", "a+") or die("Unable to open file!");
    $allNumbers[] = $storage->getTemporaryNumber();

    fwrite($numLog, "Number: " . $storage->getTemporaryNumber() . "\n");

    echo "Numbers: " . implode(", ", $allNumbers) . PHP_EOL;

    $storage->saveInArray($storage->getTemporaryNumber());

    $math->setAverage($storage->getNumberArray(), $storage->getNumberArray());

    echo "===The average of " . $math->getCount() . " num. is: " . 
    round($math->getAverage(), 2) . PHP_EOL;

    fwrite($numLog, "Average: " . round($math->getAverage(), 2) . PHP_EOL);
    fwrite($numLog, "\n");
    
    $math->incrementCount();
    echo ("\n");
}

fclose($numLog);
