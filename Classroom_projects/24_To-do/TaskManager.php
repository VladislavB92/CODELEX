<?php

declare(strict_types=1);

class TaskManager
{
    private $tasksfile;
    private array $tasks = [];

    // 1. Initializes object
    // 2. Opens CSV
    // 3. Loads tasks from CSV
    public function __construct()
    {
        $this->tasksfile = fopen('tasks.csv', 'rw+');
        $this->loadTasks();
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    private function loadTasks(): void
    {
        // 4. Loads all tasks
        while (!feof($this->tasksfile)) {
            $taskData = (array) fgetcsv($this->tasksfile);

            if (!empty($taskData[0])) {
                $this->tasks[] = (string) $taskData[0];
            }
        }
        $this->deleteTask();
        $this->addTask();

        fputcsv($this->tasksfile, $this->tasks);
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
