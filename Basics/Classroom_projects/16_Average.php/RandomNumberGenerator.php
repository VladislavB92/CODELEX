<?php

class RandomNumberGenerator
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