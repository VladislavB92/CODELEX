<?php

declare(strict_types=1);

require 'PersonProfile.php';

// Sets person data from html post
$person = new PersonProfile();
$person->setName($_POST['name'] ?? '');
$person->setSurname($_POST['surname'] ?? '');
$person->setPersonCode($_POST['personcode'] ?? '');
$person->setAddress($_POST['address'] ?? '');

// Saves person data to CSV file
$person->saveData();


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person register</title>

    <form action="/" method="post">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname"><br>

        <label for="personcode">Person code:</label>
        <input type="text" id="personcode" name="personcode"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>

        <button type="submit">Submit</button><br>

    </form>

</head>

<body>

</body>

</html>