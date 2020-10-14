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

            if (!empty($taskData)) {
                $this->tasks[] = (string) $taskData[0];
            } 

            
        }
        return $this->tasks;
    }

    public function saveTask(string $id, string $task): void
    {
        if ($task !== null && isset($task)) {
            $this->tasks[] = $task;
        } elseif (isset($id)) {
            $pos = array_search($id, $this->tasks);
            unset($this->tasks[$pos]);
        }


        fputcsv($this->tasklist, $this->tasks);
    }

}
