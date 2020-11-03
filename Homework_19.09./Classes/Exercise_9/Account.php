<?php

declare(strict_types=1);

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBanalce(): string
    {
        if ($this->balance < 0) {
            return '- $' . (abs(round($this->balance, 2)));
        }
        return ' $' . $this->balance;
    }

    public function showUserNameAndBalance(): string
    {
        return $this->getName() . ", " . $this->getBanalce();
    }
}
