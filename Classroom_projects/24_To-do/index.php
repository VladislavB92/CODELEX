<?php

declare(strict_types=1);

require_once 'TaskManager.php';

$taskManager = new TaskManager();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
</head>

<body>

    <div class="header">
        <h1>To-do list</h1>
    </div>

    <div class="entry">

        <form action="/" method="post">
            <label for="task">What to do?</label>
            <input type="text" name="task"><br><br>
            <button type="submit">Save</button><br>
        </form>

    </div>

    <div class="tasklist">

        <h2>Things to-do:</h2>

        <?php foreach ($taskManager->displayTasks() as $id => $task) : ?>

            <?= $id . ' - ' . $task; ?>

            <form action="/" method="post">
                <input type="hidden" name="delete" value="<?= $id; ?>">
                <button type="submit">X</button>
            </form> <br>

        <?php endforeach; ?>

    </div>

</body>

</html>