<?php

declare(strict_types=1);

require_once 'Picture.php';
require_once 'ImageProcessor.php';

$picture = new ImageProcessor();

if (isset($_POST)) {
    foreach ($_POST as $key => $rating) {
        $picture->changeRating($_POST[$key], new Picture($key, intval($rating)));
    }
}

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
        <h1>Lik'er!</h1>
    </div>

    <?php foreach ($picture->getImageNames() as $key => $imageName) : ?>

        <div class="photo">
            <div class="image">
                <img src="<?= $imageName; ?>">
                <form action="/" method="post">
                    <div class="buttons">
                        <input type="submit" name="<?= $key; ?>" value="❤️">
                        <input type="submit" name="<?= $key; ?>" value="👎">

                        <?php foreach ($picture->getTotalRating() as $id => $rating) : ?>

                            <?php if ($key == $id) : ?>
                                <?= $rating . ' likes'; ?>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </div>
                </form>
            </div>
        </div>

    <?php endforeach; ?>

</body>

</html>