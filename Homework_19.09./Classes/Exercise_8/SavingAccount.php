<?php

declare(strict_types=1);

class SavingAccount
{
    private float $deposited = 0;
    private float $withdrawn = 0;
    private float $interestEarned = 0;
    private float $balance;
    private float $endingBalance;

    public function __construct(float $startingBalance)
    {
        $this->balance = $startingBalance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

    public function getEndingBalance(): float
    {
        $this->setEndingBalance();
        return $this->endingBalance;
    }

    public function getDeposited(): float
    {
        return $this->deposited;
    }

    public function getWithdrawn(): float
    {
        return abs($this->withdrawn);
    }

    public function getEarnedInterest(): float
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

    public function addAnnualInterestRate(float $annualInterest)
    {
        $this->interestEarned = ((($annualInterest / 12) * $this->getBalance()));
    }

    public function setEndingBalance(): void
    {
        $this->endingBalance = $this->balance + $this->deposited - $this->withdrawn + $this->interestEarned;
    }
}
