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

    private function loadTasks(): array
    {
        while (!feof($this->tasklist)) {
            $taskData = (array) fgetcsv($this->tasklist);

            if (!empty($taskData[0])) {
                $this->tasks[] = (string) $taskData[0];
            } 
        }
        return $this->tasks;
    }



}
