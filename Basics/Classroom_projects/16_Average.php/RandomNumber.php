<?php

class RandomNumber
{
    private int $randNum;

    public function getRandNum(): int
    {
        return $this->randNum;
    }

    function setRandNum($generator): void
    {
        $this->randNum = $generator;
    }
}