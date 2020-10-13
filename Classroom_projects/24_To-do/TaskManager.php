<?php

declare(strict_types=1);

class TaskManager
{
    private $tasklist;
    private array $tasks = [];

    public function __construct()
    {
        $this->tasklist = fopen('tasks.csv', 'rw+');
        $this->loadTasks();
    }

    public function displayTasks(): array
    {
        return $this->tasks;
    }

    public function saveTask(array $task): void
    {
        fputcsv($this->tasklist, (array) $task);
    }

    public function loadTasks(): void
    {
        while (!feof($this->tasklist)) {
            $taskData = (array) fgetcsv($this->tasklist);

            if (!empty($taskData[0])) {
                $this->tasks[] = (string) $taskData[0];
            }
        }
    }
}
