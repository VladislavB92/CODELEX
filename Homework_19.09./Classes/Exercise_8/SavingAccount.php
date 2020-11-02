<?php

declare(strict_types=1);

class SavingAccount
{
    private float $deposited = 0;
    private float $withdrawn = 0;
    private float $interestEarned = 0;
    private float $balance;
    private float $monthlyInterestRate;

    public function __construct(float $startingBalance, float $annualInterestRate)
    {
        $this->balance = $startingBalance;
        $this->monthlyInterestRate = $annualInterestRate / 12;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getDeposited(): float
    {
        return $this->deposited;
    }

    public function getWithdrawn(): float
    {
        return abs($this->withdrawn);
    }

    public function getInterestEarned(): float
    {
        return $this->interestEarned;
    }

    public function saveWithdraw(float $amount): void
    {
        $this->withdrawn -= $amount;
    }

    public function saveDeposite(float $amount): void
    {
        $this->deposited += $amount;
    }

    public function saveInterest(): void
    {
        $this->interestEarned += $this->monthlyInterestRate * $this->balance;
    }
}
