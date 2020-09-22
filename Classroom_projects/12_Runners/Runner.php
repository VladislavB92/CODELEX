<?php

class Runner
{
    private string $name;
    private int $position = 0;
    public int $speed;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPos(): int
    {
        return $this->position;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setPos($pos)
    {
        $this->position = $pos;
    }

    public function changeSpeed(): int
    {
        return $this->speed = rand(1, 5);
    }
}
