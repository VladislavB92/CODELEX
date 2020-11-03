<?php

declare(strict_types=1);

class Odometer extends Car2
{
    public function getCurrentMileage(): float
    {
        return $this->currentMileage;
    }

    public function increaseMileage(): void
    {
        if ($this->currentMileage < $this::MAX_MILEAGE) {
            $this->currentMileage++;
        } elseif ($this->currentMileage == $this::MAX_MILEAGE) {
            $this->currentMileage = 0;
            $this->currentMileage++;
        }
    }

}
