<?php

declare(strict_types=1);

require_once 'PinManager.php';

session_start();

$pinManager = new PinManager();

if (isset($_POST['button']) && strlen($_SESSION["pincode"]) < 4) {
    if ($_SESSION["pincode"] !== "") {
        $_SESSION["pincode"] .= "";
    }

    $_SESSION["pincode"] .= $_POST['button'];
} else {
    $_SESSION["pincode"] = "";
}

$splittedPin = str_split($_SESSION["pincode"]);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter pincode</title>
</head>

<body>

    <?= $pinManager->checkPin($_SESSION["pincode"]); ?>

    <br><br>
    <?php foreach ($splittedPin as $digit) : ?>
        <?php if ($_SESSION["pincode"] != null) : ?>
            <?= "X" ?>
        <?php endif; ?>
    <?php endforeach; ?>
    <br>

    <form action="/" method="post">
        <input type="submit" id="button" name="button" value="1">
        <input type="submit" id="button" name="button" value="2">
        <input type="submit" id="button" name="button" value="3"><br>
        <input type="submit" id="button" name="button" value="4">
        <input type="submit" id="button" name="button" value="5">
        <input type="submit" id="button" name="button" value="6"><br>
        <input type="submit" id="button" name="button" value="7">
        <input type="submit" id="button" name="button" value="8">
        <input type="submit" id="button" name="button" value="9"><br>
        <input type="submit" id="button" name="button" value="0">
    </form>
</body>

</html>