<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <div>
        <h1>Article <?= $id; ?></h1>
        <h2><?= $article->getTitle(); ?></h2>
        <p>
            <?= $article->getContent(); ?>
        </p>

    </div>
</head>

<body>

</body>

</html>