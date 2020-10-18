<?php

declare(strict_types=1);

class TaskManager
{
    private array $currentTasks = [];

    public function __construct()
    {
        $this->addTask();
        $this->removeTask();
    }

    public function displayTasks(): array
    {
        $rows = array_map('str_getcsv', file('tasks.csv'));

        foreach ($rows as $task) {
            if ($task[0] !== 0) {
                $this->currentTasks[] = $task[0];
            }
        }

        return $this->currentTasks;
    }

    private function addTask(): void
    {
        if (isset($_POST['task'])) {
            $task = $_POST['task'] . PHP_EOL;
            file_put_contents('tasks.csv', $task, FILE_APPEND);
        }
    }

    public function removeTask(): void
    {
        $newTaskArray = [];

        if (isset($_POST['delete'])) {

            foreach ($this->displayTasks() as $id => $task) {
                file_put_contents('tasks.csv', "");
                if ($_POST['delete'] == $id) {

                    $newTaskArray = array_splice(
                        $this->currentTasks,
                        intval($_POST['delete']),
                        1,
                        $id
                    );

                    file_put_contents('tasks.csv', $newTaskArray);
                }
            }
        }
    }

    public function eraseFile()
    {
        file_put_contents('tasks.csv', "");
    }
}
