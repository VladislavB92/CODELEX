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
    private int $uniqueID;
    private string $make; // Brand
    private string $licencePlate; // Latvian standard
    private int $pinCode; // 3-digit code
    private float $fuelConsumption; // litres/10km
    private float $maxGasTank = 50.0; // litres
    private float $totalMileage = 0; // kilometres
    private float $actualMileage;

    public function __construct(
        int $uniqueID,
        string $make,
        string $licencePlate,
        int $pinCode,
        float $fuelConsumption
    ) {
        $this->uniqueID = $uniqueID;
        $this->make = $make;
        $this->licencePlate = $licencePlate;
        $this->pinCode = $pinCode;
        $this->fuelConsumption = $fuelConsumption;
    }

    public function getUniqueId(): int
    {
        return $this->uniqueID;
    }

    public function getMake(): string
    {
        return $this->make;
    }

    public function getLicencePlate(): string
    {
        return $this->licencePlate;
    }

    public function getPincode(): int
    {
        return $this->pinCode;
    }

    public function getMaxGasTank(): float
    {
        return $this->maxGasTank;
    }


    public function getTotalMileage(): float
    {
        return $this->totalMileage;
    }

    public function driveCar(): void
    {
        $this->maxGasTank -= $this->fuelConsumption;
    }

    public function addTotalMileage()
    {
        $this->totalMileage += 10;
    }

    public function refuelGas(int $litres): void
    {
        $this->maxGasTank += $litres;
    }
}

// Car initialization
$cars = [
    $bugatti = new Car(1, "Bugatti Veyron", "LV-7777", 345, 2.1),
    $lambo = new Car(2, "Lamborghini Diablo", "LT-69", 123, 1.5),
    $lada = new Car(3, "LADA NIVA", "PS-356", 987, 0.7),
];

echo "\nWELCOME TO OUR GARAGE!\n";
echo "\nWe have folowing cars for today's ride:\n";

$driveFinished = false;

while ($driveFinished === false) {

    foreach ($cars as $car) {
        echo "\nCar ID " . $car->getUniqueID();
        echo "\nModel: " . $car->getMake() . PHP_EOL;
        echo "License plate: " . $car->getLicencePlate() . PHP_EOL;
        echo "Car totalMileage: " . $car->getTotalMileage() . PHP_EOL;
    }

    // Sets $car
    $car = null;

    while ($car === null) {

        $car = readline("\nChoose your car by its ID number: ");

        foreach ($cars as $index => $carObject) {

            if ($car == $index + 1) {
                $car = $carObject;
                echo "You have choosen " . $car->getMake() . PHP_EOL;
                break;
            }
        }

        if ($car !== $carObject) {
            echo "\nWrong car ID! Try again!\n";
            $car = null;
        }
    }

    // Pincode logic
    $pass = false;
    $attempts = 3;

    while ($pass === false) {

        $pincode = readline("\nEnter pincode (3-digit code): ");

        if ($pincode == $car->getPincode()) {
            $pass = true;
            echo "\nPincode is CORRECT!\n";
            echo "\nLET'S DRIVE!\n";
        } elseif ($pincode !== $car->getPincode()) {
            echo "\nPincode is NOT CORRECT!\n";
            $attempts--;
            echo "\nYou have lafet $attempts attempts!\n";
            $pass = false;
        }

        if ($attempts === 0) {
            exit("You have been locked out from the itnerface. Bye!\n");
        }
    }

    // Logic for driving

    for ($i = 0; $i <= $car->getMaxGasTank(); $i + 10) {
        echo "\n" . $car->getMake() . " with licence plate " .
            $car->getLicencePlate() . " traveled " . $car->addTotalMileage() . " km" .
            PHP_EOL;

        echo "Remaining gas: " . $car->getMaxGasTank() . " litres\n";
        $car->driveCar();
        $car->getTotalMileage();
        echo "Total milage of " . $car->getMake() . ": " . $car->getTotalMileage() . " km\n";
        sleep(1);
    }

    // Repeat the drive with another car
    $driveAgain = readline("\nDrive again with another car? Type y/n: ");

    if ($driveAgain === "n") {
        $driveFinished = true;
    } elseif ($driveAgain === "y") {
        $refuel = readline("\nRefuel this car? Type y/n: ");

        if ($refuel === "n") {
            $driveFinished = false;
        } elseif ($refuel === "y") {
            $car->refuelGas(50);
            echo "\nYour " . $car->getMake() . " is refueled.";
            echo "\nYou have " . $car->getMaxGasTank() . " in your tank.";
        }

        $driveFinished = false;
    }
}
