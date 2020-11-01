<?php

declare(strict_types=1);

class FuelGauge
{
    private $currentFuel; // litres

    public function __construct(int $maxFuel)
    {
        $this->currentFuel = $maxFuel;
    }

    public function getCurrentFuel(): int
    {
        return $this->currentFuel;
    }

    public function reportCurrentFuel(): void
    {
        echo "Fuel level: " . $this->currentFuel . " litres\n";
    }

    public function fillCar(): void
    {
        $this->currentFuel++;
        echo "Refueling: " . $this->currentFuel;
    }

    public function burnFuel(&$mileage): void
    {
        $this->currentFuel -= (10/$mileage);
    }
}
