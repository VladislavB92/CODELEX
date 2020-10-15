<?php

declare(strict_types=1);

require_once 'Picture.php';
require_once 'RatingController.php';


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
    <div classs="pictures">
        <img src="images/bird.jpg" alt="Puffin">

        <form action="/" method="post">

            <input type="submit" name="rating" value="+1">

            <input type="submit" name="rating" value="-1">

            <?php if (isset($_POST['rating'])) : ?>

                <?php $picture->saveLike($_POST['rating']); ?>

                <?= "Rating: " . implode("", $picture->getTotalRating()); ?>

            <?php endif; ?>
        </form>
    </div>
</body>

</html>