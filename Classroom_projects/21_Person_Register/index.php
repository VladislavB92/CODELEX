<?php

declare(strict_types=1);

require 'PersonProfile.php';
require_once 'PersonDataStorage.php';

// Sets person data from html post
$person = new PersonProfile(
    $_POST['name'] ?? 'name',
    $_POST['surname'] ?? 'surname',
    $_POST['personcode'] ?? 'personcode',
    $_POST['address'] ?? 'address'
);

$dataStorage = new PersonDataStorage();
$dataStorage->saveData($person);

$persCode = $_POST['serchedcode'] ?? 'serchedcode';
$foundedPerson = $dataStorage->searchByPersCode($persCode);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Person register</title>

    <h2>Save the person in the database</h2>
    <form action="/" method="post">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname"><br>

        <label for="personcode">Personal code:</label>
        <input type="text" id="personcode" name="personcode"><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br>

        <button type="submit" name="submit1">Save</button><br>
        <?php if (isset($_POST["submit1"])) : ?>
            <p style="font-weight: bold;">Saved!</p>
        <?php endif; ?>

    </form>

    Name: <?= $person->getName(); ?><br>
    Surname: <?= $person->getSurname(); ?><br>
    Personal code: <?= $person->getPersonCode(); ?><br>
    Address: <?= $person->getAddress(); ?><br><br>

    <h2>Look for the person in the database</h2>
    <form action="/" method="post">
        <label for="searchpersoncode">Search by personal code:</label>
        <input type="text" id="searchpersoncode" name="serchedcode"><br>
        <button type="submit">Search</button><br>
    </form>

    <?php if ($foundedPerson !== null) : ?>
        Name: <?= $foundedPerson->getName(); ?><br>
        Surname: <?= $foundedPerson->getSurname(); ?><br>
        Personal code: <?= $foundedPerson->getPersonCode(); ?><br>
        Address: <?= $foundedPerson->getAddress(); ?><br>
    <?php else : ?>
        <?= 'Empty' ?>
    <?php endif; ?>

</head>

<body>

</body>

</html>