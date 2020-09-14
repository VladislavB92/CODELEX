<?php

echo "------Exercise 1-------------------------\n";
// Exercise 1
/* Create while, for or foreach loop in separated file.
Create main file that includes this script and gives an output. */

include "files/loops1.php";

// "include" throws a warning
// and "require" throws a fatal error and ends the script when a file cannot be found.

echo "\n------Exercise 2-------------------------\n";
// Exercise 2
/* Create a file that stores 2 functions created by your choice.
Create file that includes this file 
and executes the functions and displays output. */

include "files/time.php";

greeting();
crntTime();

echo "\n------Exercise 3-------------------------\n";
// Exercise 3
/* Create functions file that stores function by your choice.
Create 2nd file that includes your function file.
Include your 2nd file into your main program file 
and execute function to display the output. */

include "files/func2.php";

model();
pc();

echo "\n------Exercise 4-------------------------\n";
// Exercise 4
/* Using PHP in-built functions create a program that accepts 1 argument - filename.
Create a file with the filename of your choice and store information with comma 
separated (example. John, Doe, 10)
Using PHP in-built functions read information from this file and create an object 
based on information from the file.
Output the name, surname and age of the person in the output. */

$file_name = "files/person.csv";
// Stores the subfolder and filename.

$person_data_arr = [];
// The array where data from file will be stored.

if (($handle = fopen($file_name, "r")) !== FALSE) {
    // If opening file is successful...

    while (($person_data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        // While there are no errors, read lines from CSV file...

        $person_data_arr[] = $person_data;
        // And store into an array.
    }

    fclose($handle);
    // Close an open file pointer.
}

$person_object = new stdClass();
$person_object = (object) $person_data_arr;

var_dump($person_object);

echo "\n------Exercise 5-------------------------\n";
// Exercise 5
/* Create a .csv file that stores (ID, name, surname, age) of multiple persons.
Create a program that accepts 1 argument (id of the user) 
and displays the user information if the user has been found.
If the user has not been found, output that in the console. */

$rows = array_map('str_getcsv', file('files/user_base.csv'));
// Takes the rows from the files.

$header = array_shift($rows);
$csv = [];
foreach ($rows as $row) {
    $csv[] = array_combine($header, $row);
}
// Turns csv data into an associative array.

//print_r($csv);

function findUser($database, $id)
{
    foreach ($database as $person) {
        if ($person["ID"] === $id) {
            // If "ID" exists in $csv...
            return $person;
        }
    }
    return "ID was not found!";
}

print_r(findUser($csv, "08"));
