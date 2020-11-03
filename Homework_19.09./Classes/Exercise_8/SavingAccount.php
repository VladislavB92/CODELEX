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
        return round($this->balance, 2);
    }

    public function getDeposited(): float
    {
        return round($this->deposited, 2);
    }

    public function getWithdrawn(): float
    {
        return round(abs($this->withdrawn), 2);
    }

    public function getInterestEarned(): float
    {
        return round($this->interestEarned, 2);
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
