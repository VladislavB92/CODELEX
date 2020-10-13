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

    public function saveTask(Task $task): void
    {
        fputcsv($this->tasklist, $task->toArray());
    }

    public function loadTasks(): array
    {
        while (!feof($this->tasklist)) {
            $taskData = (array) fgetcsv($this->tasklist);

            if (!empty($taskData[0])) {
                $this->tasks[] = new Task(
                    (string) $taskData[0]
                );
            }
        }
        return $this->tasks;
    }
}
