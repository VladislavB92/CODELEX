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

    public function __construct($make, $licencePlate)
    {
        $this->make = $make;
        $this->licencePlate = $licencePlate;
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

    public function driveCar()
    {
        $this->maxGasTank -= 0.7;
    }
}

$cars = [
    $bugatti = new Car("Bugatti", "LV-7777"),
    $lambo = new Car("Lamborghini", "LT-69"),
    $lada = new Car("LADA NIVA", "PS-356"),
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
    if ($choosenCar == $selectedCar->getMake()) {
        for ($i = 0; $i <= $selectedCar->getMaxGasTank(); $i + 10) {
            echo "\n" . $selectedCar->getMake() . " with licence plate " . $selectedCar->getLicencePlate() . " traveled $distance km" . PHP_EOL;
            echo "Remaining gas: " . $selectedCar->getMaxGasTank() . " litres\n";
            $selectedCar->driveCar();
            $carMilage += $distance;
            echo "Total car milage of " . $selectedCar->getMake() . ": $carMilage km\n";
        }
    }
}
