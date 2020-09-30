<?php

include 'RandomNumber.php';
include 'MathLogic.php';

$ranInt = new RandomNumber();
$math = new MathtLogic();

while ($math->getCount() < 50) {
    $ranInt->setRandNum(rand(1, 1000));
    $math->storeTemporaryNumber($ranInt->getRandNum());

    $myfile = fopen("Random_num_collection.txt", "a+") or die("Unable to open file!");
    $txt = $math->getTemporaryNumber();;
    fwrite($myfile, "$txt ");

    echo "Number: " . $math->getTemporaryNumber() . PHP_EOL;
    $math->saveInArray($math->getTemporaryNumber());

    $math->setAverage($math->getNumberArray(), $math->getNumberArray());
    echo "Average: " . round($math->getAverage(), 2) . PHP_EOL;

    $math->incrementCount();
    echo ("\n");
}

fclose($myfile);
