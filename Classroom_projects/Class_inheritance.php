<?php

/*
Klase auto -> bākas tilpums.
Uztaisīt child marku klases, 2, 3 klases
Child klasē unikāls traits.
Kā noteikt, kura tā marka ir?
 */


class Car
{
    public $name;
    public $tankCapacity;

    public function __construct($name, $tankCapacity)
    {
        $this->name = $name;
        $this->tankCapacity = $tankCapacity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCapacity()
    {
        return $this->tankCapacity;
    }
}

class Volvo extends Car
{
    private $safetyFeature = "CityDrive";

    public function getSafetyFeature()
    {
        return $this->safetyFeature;
    }
}

class Audi extends Car
{
    private $allWheelDrive = "Quattro";

    public function getAllWheelDrive()
    {
        return $this->allWheelDrive;
    }
}

class Opel extends Car
{
    private $rust = "rust present";

    public function isRustPresent()
    {
        return $this->rust;
    }
}

$volvo = new Volvo("Volvo S40", "50l");
$audi = new Audi("Audi A5", "45L");
$opel = new Opel("Opel Ascona", "42L");

if ($volvo instanceof Car == true) {
    echo "$volvo->name is an instance of a Car\n";
    echo $volvo->name . ", " . $volvo->tankCapacity . ", special feature: " . $volvo->getSafetyFeature() . PHP_EOL;
}

if ($audi instanceof Car == true) {
    echo "$audi->name is an instance of a Car\n";
    echo $audi->name . ", " . $audi->tankCapacity . ", special feature: " .  $audi->getAllWheelDrive() . PHP_EOL;
}

if ($opel instanceof Car == true) {
    echo "$opel->name is an instance of a Car\n";
    echo $opel->name . ", " . $opel->tankCapacity . ", special feature: " . $opel->isRustPresent() . PHP_EOL;
}
