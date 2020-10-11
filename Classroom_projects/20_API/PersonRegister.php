<?php

declare(strict_types=1);

class PersonRegister
{
    private $register;

    private array $persons;

    public function __construct()
    {
        $this->register = fopen('names.csv', 'rw+');
        $this->loadPersons();
    }

    public function getByName(string $name): Person
    {
        foreach ($this->persons as $person) {
            if ($person->getName() === $name) {
                return $person;
            }
        }

        $person = $this->getPersonFromAPI($name);

        fputcsv($this->register, $person->toArray());

        return $person;
    }

    private function getPersonFromAPI(string $name): Person
    {
        $response = file_get_contents('https://api.agify.io//?name=' . $name);
        $person = json_decode($response, true);
        return new Person(
            $person['name'],
            $person['age'],
            $person['count']
        );
    }

    private function loadPersons(): void
    {

        while (!feof($this->register)) {
            $personData = (array) fgetcsv($this->register);

            $this->persons[] = new Person(
                (string) $personData[0], // Name
                (int) $personData[1], // Age
                (int) $personData[2], // Count
            );
        }
    }
}
