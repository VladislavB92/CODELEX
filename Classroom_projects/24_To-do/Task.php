<?php

declare(strict_types=1);

class Task
{

    private string $taskName;

    public function __construct(string $task)
    {
        $this->taskName = $task;
    }

    public function getTaskName(): string
    {
        return $this->taskName;
    }

    public function toArray(): array
    {
        return (array) $this->getTaskName();
    }
}
