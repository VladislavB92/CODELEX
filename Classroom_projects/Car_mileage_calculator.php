<?php

$fuel = readline("Enter the amount of fuel: ");

$per1km = 0.07; //0,07l
//How much fuel per 1km will take if 7l/100km.

$distance = $fuel / $per1km; //50 / 0.07
// Distance that can be traveled with fuel/0.07.

echo round($distance, $precision = 2) . " kilometers can be traveled" . PHP_EOL;

$real_time = readline("Calculate total possible distance with $fuel litres in real-time simulation?\nPress 'Y' if yes
 \nOr press any key to exit.\n");

 $traveled_distance = 0;
 $fuel2 = readline("Enter the amount of fuel: ");
 $l_per_100 = readline("Enter l/100km: ");
 $l_per_1 = round($l_per_100 / 100, $precision = 2);

 if ($real_time == "Y") {
    
    while ($fuel2 >= 0) {

        $traveled_distance++;
        
        if ($traveled_distance > 0) {
        $fuel2 -= $l_per_1; // with each km 50l - 0.07l
        echo $traveled_distance . "km traveled." . PHP_EOL;
        echo round($fuel2, $precision = 2) . "l of fuel remaining" . PHP_EOL;
        }
    }
} else {
    exit();
}