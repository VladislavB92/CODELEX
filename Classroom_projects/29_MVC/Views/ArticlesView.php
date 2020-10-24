<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <div>
        <h1>Articles</h1>
        <?php foreach ($articles as $article) : ?>
            <h3>
                <?= $article->getTitle(); ?>
            </h3>
            <p>
                <?= $article->getContent(); ?>
            </p>
        <?php endforeach; ?>


        <pre>
    <?= var_dump($articles); ?>
    </pre>
    </div>
</head>

<body>

</body>

</html>