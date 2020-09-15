<?php

// Exercise #3
// Check if an array contains a value user entered

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "\nEnter the value to search for: ";
$search = readline();
$result = array_search($search, $numbers);

if ($result == true) {
    echo "\nThe number $search you are looking for is in here.\n";
} else {
    echo "\nNu such value.\n";
}
