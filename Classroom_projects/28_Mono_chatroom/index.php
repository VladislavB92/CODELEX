<?php

declare(strict_types=1);

require_once 'pin_engine/PinManager.php';
require_once 'pin_engine/UserProfile.php';
require_once 'chat_engine/ChatController.php';

session_start();

$pinManager = new PinManager();
$chatControler = new ChatController();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat room</title>
</head>

<body>

    <div class="header">

        <?php if (!empty($_SESSION)) : ?>
            <?= "Active user: " . $_SESSION['name']; ?>
            <form action="/" method="POST">
                <input type="hidden" name="logout" value="true" id="pincode">
                <button type="submit">Log out</button>
            </form>
        <?php elseif (isset($_POST['logout'])) : ?>
            <?= 'No user logged in'; ?>
        <?php endif; ?>

        <h1>Chat room</h1>
    </div>

    <div class="entryField">

        <h3>Enter your pincode</h3>

        <form action="/" method="POST">
            <input type="text" name="pincode" id="pincode">
            <button type="submit">Log in</button>
        </form>

        <?php if (isset($_POST['pincode'])) : ?>
            <?php $pinManager->verifyUser($_POST['pincode']); ?>
            <?= "Welcome back, " . $_SESSION['name'] . "!"; ?> <br><br>

        <?php elseif (isset($_POST['logout'])) : ?>
            <?= "Bye!"; ?>
            <?php $_POST['logout'] = 'false'; ?>
            <?php $_SESSION = []; ?>
            <?php session_destroy(); ?>
        <?php endif; ?>

    </div>

    <div class="message">

        <br>
        <h3>Enter your message</h3>

        <form action="/" method="post">
            <input type="text" name="message">
            <button type="submit">Send</button>
        </form>

    </div>

    <div class="publicChat">
        <h2>Latest messages:</h2>
        <?= implode("<br><br>", $chatControler->displayChat()); ?><br>

    </div>

</body>

</html>