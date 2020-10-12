<?php

declare(strict_types=1);

class MyInvestment
{
    private float $amount;
    private int $duration;
    private float $percentage;
    private float $total;

    public function __construct(
        float $amount,
        int $duration,
        float $percentage
    ) {
        $this->amount = $amount;
        $this->duration = $duration;
        $this->percentage = $percentage;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getPercentage(): float
    {
        return $this->percentage;
    }

    public function getYearlyGain(): float
    {
        $yearlyGain = ($this->getAmount() * $this->getPercentage()) / 100;
        return $yearlyGain;
    }

    public function getTotal(): float
    {
        $this->total = $this->getAmount() + ($this->getYearlyGain() *
            $this->getDuration());

        return round($this->total, 2, PHP_ROUND_HALF_UP);
    }
}
