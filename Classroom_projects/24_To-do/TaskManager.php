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
        $deletedTask = [];
        $newTaskArray = [];

        if (isset($_POST['delete'])) {

            foreach ($this->displayTasks() as $id => $task) {
                if ($_POST['delete'] == $id) {

                    $deletedTask = array_splice(
                        $this->currentTasks,
                        intval($_POST['delete']),
                        1,
                        $id
                    );

                    $newTaskArray = array_diff($this->currentTasks, $deletedTask);
                    $reindexed = array_values($newTaskArray);
                    

                    file_put_contents('Temp.csv', implode(PHP_EOL, $reindexed), FILE_APPEND);
                }
            }
        }
    }
}
