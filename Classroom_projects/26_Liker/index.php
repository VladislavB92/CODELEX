<?php

declare(strict_types=1);

require_once 'Picture.php';
require_once 'ImageProcessor.php';

$picture = new ImageProcessor();

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
            
        <?php foreach ($picture->getImageNames() as $key => $imageName) : ?>
                <img src="<?= $imageName; ?>">

                <form action="/" method="post">
                    <input type="submit" name="<?= $key; ?>" value="👎">
                    <input type="submit" name="<?= $key; ?>" value="👍">

                    <?php if (isset($_POST[$key])) : ?>

                        <?php $picture->changeRating($_POST[$key], new Picture($key, $imageName)); ?>
                    <?php endif; ?>

                    <?= implode("", $picture->getTotalRating()) . " people like that!"; ?>
              
                </form>
            <?php endforeach; ?>

            <?= var_dump($_POST); ?>
            <div class="buttons">

            </div>
        </div>

    </div>

    <pre>
</body>

</html>