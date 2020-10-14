<?php

declare(strict_types=1);

require_once 'ContactCard.php';
require_once 'ContactManager.php';

$contact = new ContactCard();
$contactManager = new ContactManager;
$contactManager->saveData($contact);

$number = intval($_POST['number']) ?? 0;
$foundedPerson = $contactManager->searchByNumber($number);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile database</title>
</head>

<body>
    <div class="contactSave">
        <h2>Find contact</h2>
        <form action="/" method="post">
            <label for="number">Phone number:</label>
            <input type="text" id="number" name="number"><br>
            <button type="submit">Search</button><br>
        </form>
        </form>
    </div>
    <div class="results">
        <?php if ($foundedPerson !== null) : ?>
            Name: <?= $foundedPerson->getName(); ?><br>
            Surname: <?= $foundedPerson->getSurname(); ?><br>
            Number: <?= $foundedPerson->getNumber(); ?><br>
        <?php else : ?>
            <?= 'Phone number is not found' ?>
        <?php endif; ?>
    </div>
</body>