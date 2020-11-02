<?php

declare(strict_types=1);

require_once 'Survey.php';

class DrinksSurvey extends Survey
{
    private float $energyDrinksPeoplePercent = 0.14;
    private float $citrusEnergyDrinksPercent = 0.64;
    private float $energyDrinksPeopleCount;
    private float $citrusDrinksPeopleCount;

    public function __construct(int $peopleSurveyed)
    {
        $this->peopleSurveyed = $peopleSurveyed;
        $this->setEnergyDrinksPeopleCount();
        $this->setCitrusDrinksPeopleCount();
    }

    public function getEnergyDrinksPeopleCount(): float
    {
        return $this->energyDrinksPeopleCount;
    }

    public function getCitrusDrinksPeopleCount(): float
    {
        return $this->citrusDrinksPeopleCount;
    }

    public function setEnergyDrinksPeopleCount(): void
    {
        $this->energyDrinksPeopleCount =
            $this->peopleSurveyed * $this->energyDrinksPeoplePercent;
    }

    public function setCitrusDrinksPeopleCount(): void
    {
        $this->citrusDrinksPeopleCount = $this->citrusEnergyDrinksPercent * 100;
    }
}
