<?php

declare(strict_types=1);

var_dump($_POST['like'], $_POST['dislike']);

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
            <button type="submit" name="like">Like</button>
        </form>
        <form action="/" method="post">
            <button type="submit" name="dislike">Dislike</button>
        </form>
    </div>

</body>

</html>