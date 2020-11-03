<?php

declare(strict_types=1);

class Odometer
{
    private float $currentMileage = 0;
    const MAX_MILEAGE = 999999;

    public function getCurrentMileage(): float
    {
        return $this->currentMileage;
    }

    public function incrMileage(): void
    {
        if ($this->currentMileage < $this::MAX_MILEAGE) {
            $this->currentMileage++;
        } elseif ($this->currentMileage == $this::MAX_MILEAGE) {
            $this->currentMileage = 0;
            $this->currentMileage++;
        }
    }

    public function moveCar($fuel): void
    {
        if ($fuel > 0) {
            $fuel--;
        }
    }
}
