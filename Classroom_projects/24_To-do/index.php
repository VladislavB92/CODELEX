<?php

// 1. Make task entry field.
// 2. Display task.

declare(strict_types=1);

require_once 'TaskManager.php';

$taskManager = new TaskManager();

echo "<pre>";
var_dump($taskManager->getTasks());
echo "</pre>";

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>

<body>
    <div class="header">
        <h1>To-do list</h1>
    </div>

    <div class="entryField">
        <form action="/" method="post">
            <label for="task">What to do?</label>

            <input type="text" name="task"><br><br>

            <button type="submit">Save</button><br>
        </form>
    </div>

    <div class="tasklist">
        <h2>Things to-do:</h2>
        <?php foreach ($taskManager->getTasks() as $id => $task) : ?>
            <?= $id . ' - ' . $task; ?>
            <form action="/" method="post">
                <button type="submit" name="id" value="<?= $id; ?>">X</button>
            </form> <br>
        <?php endforeach; ?>
    </div>
</body>

</html>