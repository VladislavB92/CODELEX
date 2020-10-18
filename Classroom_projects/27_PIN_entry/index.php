<?php

declare(strict_types=1);

require_once 'pin_engine/PinManager.php';
require_once 'pin_engine/UserProfile.php';

session_start();

$pinManager = new PinManager();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter PIN</title>
</head>

<body>
    <div class="entryField">
        
        <form action="/" method="post">
            <input type="text" name="pincode" id="pincode">
            <button type="submit">Log in</button>
        </form>

        <form action="/" method="post">
            <input type="hidden" name="logout" value="true" id="pincode">
            <button type="submit">Log out</button>
        </form>

        <?php if (isset($_POST['pincode'])) : ?>
            <?php $pinManager->verifyUser($_POST['pincode']); ?>
            <?= "Welcome back, " . key($_SESSION) . "!"; ?>

        <?php elseif (isset($_POST['logout'])) : ?>
            <?= "Bye!"; ?>
            <?php $_POST['logout'] = 'false'; ?>
            <?php $_SESSION = []; ?>
            <?php session_destroy(); ?>
        <?php endif; ?>

        <?php if (!empty($_SESSION)) : ?>
            <?= "Active user: " . key($_SESSION); ?> <br><br>
        <?php endif; ?>
    </div>

</body>

</html>