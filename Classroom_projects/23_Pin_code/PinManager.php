<?php

declare(strict_types=1);

class PinManager
{
    private string $correctPin;

    public function __construct(string $correctPin)
    {
        $this->correctPin = $correctPin;
    }

    public function getCorrectPin(): string
    {
        return $this->correctPin;
    }

    public function checkPin(string $enteredPin): string
    {
        if ($enteredPin === $this->getCorrectPin()) {
            return "UNLOCKED";
        } else {
            return "LOCKED";
        }
    }
}
