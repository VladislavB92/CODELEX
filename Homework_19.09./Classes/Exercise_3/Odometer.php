<?php

declare(strict_types=1);

class Odometer
{
    private int $currentMileage; // km
    const MAX_MILEAGE = 999999;

    public function __construct(int $defaultMileage)
    {
        $this->currentMileage = $defaultMileage;
    }

    public function getCurrentMileage(): int
    {
        return $this->currentMileage;
    }

    public function reportCurrentMileage(): void
    {
        echo "Mileage: " . $this->currentMileage . " km\n";
    }

    public function incrMileage(): void
    {
        if ($this->currentMileage < $this::MAX_MILEAGE) {
            $this->currentMileage++;
        } elseif ($this->currentMileage == $this::MAX_MILEAGE) {
            $this->currentMileage = 0;
            $this->currentMileage ++;
        }
    }

    public function moveCar(&$fuel): void
    {
        if ($fuel > 0) {
            $fuel--;
            
        } elseif ($fuel === 0) {
            echo "\nNO FUEL! FILL CAR!\n";
        }
    }
}
