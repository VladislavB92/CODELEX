<?php

declare(strict_types=1);

class TaskManager
{
    private $tasklist;
    private array $tasks = [];

    // 1. Initializes object
    // 2. Opens CSV
    // 3. Loads tasks from CSV
    public function __construct()
    {
        $this->tasklist = fopen('tasks.csv', 'a+');
        $this->loadTasks();
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    private function loadTasks(): void
    {
        // 4. Loads all tasks
        while (!feof($this->tasklist)) {
            $taskData = (array) fgetcsv($this->tasklist);

            if (!empty($taskData[0])) {
                $this->tasks[] = (string) $taskData[0];
            }
        }
        $this->deleteTask();
        $this->addTask();
    }

    private function addTask(): void
    {
        if (isset($_POST['task'])) {
            $taskToAdd = $_POST['task'];
            $this->tasks[] = $taskToAdd;
        }
    }

    private function deleteTask(): void
    {
        if (isset($_POST['id'])) {
            $taskToDelete = intval($_POST['id']);
            unset($this->tasks[$taskToDelete]);
        }
    }
}
