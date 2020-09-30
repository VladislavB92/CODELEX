<?php

class MathtLogic
{
    private int $count = 1;
    private int $average = 0;

    public function getCount(): int
    {
        return $this->count;
    }

    public function getAverage(): int
    {
        return $this->average;
    }

    public function incrementCount(): void
    {
        $this->count++;
    }

    public function setAverage(array $array, array $count): void
    {
        $this->average = array_sum($array) / count($count);
    }
}
