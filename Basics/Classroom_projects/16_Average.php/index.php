<?php

function generateRandom(){
    $randNum = 5;
    return $randNum;
}

$count = 0;
$sum = 0;


while($count < 1){
    $sum += generateRandom();
    $count++;

}

echo("$sum\n");

