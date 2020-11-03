<?php

declare(strict_types=1);

class FuelGauge
{
    private float $currentFuel;

    public function __construct(int $fuel)
    {
        $this->currentFuel = $fuel;
    }

    public function getCurrentFuel(): float
    {
        return $this->currentFuel;
    }

    public function fillCar(): void
    {
        $this->currentFuel++;
    }

    public function burnFuel(): void
    {
        if ($this->currentFuel > 0) {
            $this->currentFuel--;
        }
    }
}
