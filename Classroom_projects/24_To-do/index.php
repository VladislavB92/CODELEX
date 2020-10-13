<?php

// 1. Make task entry field.
// 2. Display task.

declare(strict_types=1);

require_once 'Task.php';
require_once 'TaskManager.php';

$taskField = $_POST["task"] ?? 'task';
$task = new Task($taskField);

$taskManager = new TaskManager();
$taskManager->saveTask($task);



?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list</title>
    <link rel="stylesheet" href="styles.css">
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
        <pre>
        <?= var_dump($taskManager->loadTasks()); ?>
    </div>
</body>

</html>