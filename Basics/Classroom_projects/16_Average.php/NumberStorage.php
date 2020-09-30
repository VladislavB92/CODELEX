<?php

class NumberStorage
{
    private int $temporaryNumber = 0;
    private array $numberArray;

    public function getTemporaryNumber(): int
    {
        return $this->temporaryNumber;
    }

    public function getNumberArray(): array
    {
        return $this->numberArray;
    }

    public function storeTemporaryNumber(int $number): void
    {
        $this->temporaryNumber = $number;
    }

    public function saveInArray(int $number): void
    {
        $this->numberArray[] = $number;
    }
}
