<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <div>
        <h1>Articles</h1>
        <?php foreach ($articles as $index => $article) : ?>
            <h3>
                <a href="/articles/<?= $index + 1; ?>">
                    <?= $article->getTitle(); ?>
            </h3>
            </a>

            <p>
                <?= $article->getContent(); ?>
            </p>
        <?php endforeach; ?>
    </div>
</head>

<body>

</body>

</html>