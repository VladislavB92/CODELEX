<?php

class MathtLogic
{
    private int $count = 1;
    private int $average = 0;
    private int $tempNumber = 0;
    private array $numberArray;

    public function getCount(): int
    {
        return $this->count;
    }

    public function getAverage(): int
    {
        return $this->average;
    }
    public function getNumberArray(): array
    {
        return $this->numberArray;
    }

    public function getTemporaryNumber(): int
    {
        return $this->tempNumber;
    }

    public function incrementCount(): void
    {
        $this->count++;
    }

    public function setAverage(array $array, array $count): void
    {
        $this->average = array_sum($array) / count($count);
    }

    public function saveInArray($temporaryNumber): void
    {
        $this->numberArray[] = $temporaryNumber;
    }

    public function storeTemporaryNumber($number): void
    {
        $this->tempNumber = $number;
    }
}
