<?php

declare(strict_types=1);

class FuelGauge extends Car2
{
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
        $this->currentFuel = $this->currentFuel - 1 / 10;
    }

}
