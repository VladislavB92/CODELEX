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

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function loadTasks(): array
    {
        while (!feof($this->tasklist)) {
            $taskData = (array) fgetcsv($this->tasklist);

            if (!empty($taskData[0])) {
                $this->tasks[] = (string) $taskData[0];
            }
        }

        return $this->tasks;
    }

    public function saveTask(string $task): void
    {
        if ($task === 'task') {
            return;
        }
        fputcsv($this->tasklist, (array) $task);
    }

    public function deleteTask(string $id): void
    {
        if (isset($id)) {
        $pos = array_search($id, $this->tasks);
        unset($this->tasks[$pos]);
        }


        
    }
}
