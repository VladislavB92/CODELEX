<?php

declare(strict_types=1);

class PersonRegister
{
    private $register;

    private array $persons = [];

    public function __construct()
    {
        $this->register = fopen('names.csv', 'rw+');
        $this->loadPersons();
    }

    public function getByName(string $name): Person
    {
        // Gets data for already existing name from the Register
        // and terminates the method if one is found
        if ($this->persons !== null) {
            foreach ($this->persons as $person) {
                if ($person->getName() === $name) {
                    return $person;
                }
            }
        }

        // If the name is not found, the data is pulled from API

        $person = $this->getPersonFromAPI($name);

        fputcsv($this->register, $person->toArray());


        return $person;
    }

    private function getPersonFromAPI(string $name): Person
    {
        // Gets data from api
        // Decodes data from JSON to object
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
        // Put person object into the array
        while (!feof($this->register)) {
            $personData = (array) fgetcsv($this->register);

            if (!empty($personData[0])) {
                $this->persons[] = new Person(
                    (string) $personData[0], // Name
                    (int) $personData[1], // Age
                    (int) $personData[2] // Count
                );
            }
        }
    }
}
