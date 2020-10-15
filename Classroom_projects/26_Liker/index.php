<?php

declare(strict_types=1);

require_once 'Picture.php';

$picture = new Picture();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Like me, senpai!</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <h1>InstaFace</h1>
    </div>
    <div class="photo">

        <div class="image">
            <img src="images/girl.jpeg" alt="Smiling girl">
            <div class="buttons">
                <form action="/" method="post">
                    <input type="submit" name="rating" value="👎">
                    <input type="submit" name="rating" value="👍">

                    <?php if (isset($_POST['rating'])) : ?>

                        <?php $picture->changeRating($_POST['rating']); ?>

                        <?= implode("", $picture->getTotalRating()) . " people like that!"; ?>

                    <?php endif; ?>
                </form>
            </div>
        </div>

    </div>
    <div class="photo">

        <div class="image">
            <img src="images/girl1.jpg" alt="Mirror girl">
            <div class="buttons">
                <form action="/" method="post">
                    <input type="submit" name="rating" value="👎">
                    <input type="submit" name="rating" value="👍">

                    <?php if (isset($_POST['rating'])) : ?>

                        <?php $picture->changeRating($_POST['rating']); ?>

                        <?= implode("", $picture->getTotalRating()) . " people like that!"; ?>

                    <?php endif; ?>
                </form>
            </div>
        </div>

    </div>
</body>

</html>