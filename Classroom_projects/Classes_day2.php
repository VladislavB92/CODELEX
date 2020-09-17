<?php

// Izveidot mašīnas objektu (nav nepieciešams izmantot mantošanu / inheritance)
// Auto ir marka, numura zīme, bākas tilpums (max)
// Pie jauna objekta izveides bāka ir pilna

// Izveido programmu, kas šo auto darbina braucot ar statisku ātrumu (nav nozīmes)
// Uz ekrāna tiek katru sekundi izvadīti nobrauktie 10 kilometri, kas uzrāda marku, numura zīmi, bākas AKTUĀLO TILPUMU.

// 2. 
// Pievienot odometru, kas skaita līdzi kāds ir auto kopējais nobraukums. (restartējot aplikāciju odometrs būs 0!!!)

// 3.
// Pievienot opciju izvēlēties auto no saraksta (palaižot aplikāciju izdrukājas saraksts ar pieejamajiem auto)
// Ievadot skaitli vai nosaukumu izvēlas kuru auto darbinās

// 4.
// Pievienot objektam/opciju auto iestartēt ar speciāli izvēlētu pin kodu (katram auto unikāls)
// izvēloties auto no saraksta, piedāvā iedarbināt auto, ievadot pin kodu, pin kods, ja 3x ir n

// Iesniegšana
// Izveidot jaunu branch ar nosakumu TASK-4
// Darbu iesniegt classroomā ar linku uz ATVĒRTU PR.

class Car
{
    private $make;
    private $licencePlate;
    private $maxGasTank = 50;
    private $pinCode;
    private $fuelConsumption;

    public function __construct(
        string $make,
        string $licencePlate,
        int $pinCode,
        float $fuelConsumption
    ) {
        $this->make = $make;
        $this->licencePlate = $licencePlate;
        $this->pinCode = $pinCode;
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getLicencePlate(): string
    {
        return $this->licencePlate;
    }

    public function getMaxGasTank(): string
    {
        return round($this->maxGasTank, 2);
    }

    public function driveCar(): void
    {
        $this->maxGasTank -= $this->fuelConsumption;
    }
    public function getPincode(): int
    {
        return $this->pinCode;
    }
}

$cars = [
    $bugatti = new Car("Bugatti", "LV-7777", 3456, 2.0),
    $lambo = new Car("Lamborghini", "LT-69", 1234, 1.5),
    $lada = new Car("LADA NIVA", "PS-356", 9876, 0.7),
];

$distance = 10;
$carMilage = 0;

echo "\nWELCOME TO OUR GARAGE!\n";
echo "Choose your car:\n";
echo "Bugatti\n";
echo "Lamborghini\n";
echo "LADA NIVA\n";

foreach ($cars as $selectedCar) {

    $choosenCar = readline("Choose your car: ");
    $enteredPincode = readline("Enter pin-code: ");

    if ($choosenCar == $selectedCar->getMake()) {

        if ($selectedCar->getPincode() === intval($enteredPincode)) {

            for ($i = 0; $i <= $selectedCar->getMaxGasTank(); $i + 10) {
                echo "\n" . $selectedCar->getMake() . " with licence plate " .
                    $selectedCar->getLicencePlate() . " traveled $distance km" .
                    PHP_EOL;

                echo "Remaining gas: " . $selectedCar->getMaxGasTank() . " litres\n";
                $selectedCar->driveCar();
                $carMilage += $distance;
                echo "Total car milage of " . $selectedCar->getMake() . ": $carMilage km\n";
                sleep(1);
            }
        } else {
            echo "Wrong pincode! Try again!\n";
        }
    } else {
        echo "Wrong name. Try again!\n";
    }
}
