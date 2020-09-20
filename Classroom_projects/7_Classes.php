<?php

// Vārdam, Uzvārdam, Middle name
// Publiskas funkcijas
// Datus nevar mainīt no ārpuses
// Funkcijām jābūt pieejamām
// 3 klases instances (3 objekti)

class Person
{
    private $name;
    private $middleName;
    private $surname;

    public function __construct($name, $middleName = null, $surname)
    {
        $this->name = $name;
        $this->middleName = $middleName;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMiddleName()
    {
        return $this->middleName;
    }

    public function getSurname()
    {
        return $this->surname;
    }
}

$person1 = new Person("Michael", null, "Jackson");
echo $person1->getName() . $person1->getMiddleName() . " " . $person1->getSurname() . PHP_EOL;

$person2 = new Person("Arnold", "Gunter", "Schwarzneger");
echo $person2->getName() . " " . $person2->getMiddleName() . " " . $person2->getSurname() . PHP_EOL;

$person3 = new Person("Jack", null, "Jackovich");
echo $person3->getName() . $person3->getMiddleName() . " " . $person3->getSurname() . PHP_EOL;
