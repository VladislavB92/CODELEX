<?php

declare(strict_types=1);

require_once 'Person.php';
require_once 'PersonRegister.php';

$personRegister = new PersonRegister();

$name = $_POST['name'] ?? 'Nobody';

$person = $personRegister->getByName($name);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API call exercise</title>
</head>

<body>
    <form action="/" method="post">
        <label for="name">Name:</label>

        <input type="text" id="name" name="name">

        <button type="submit">Submit</button>

    </form>

    <?= $person->getName() . ': ' . $person->getAge() . ', ' . $person->getCount(); ?>
</body>

</html>