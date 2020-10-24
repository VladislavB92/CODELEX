<?php

declare(strict_types=1);

class PersonDataStorage
{
    private $dataBase;
    private array $persons = [];

    public function __construct()
    {
        $this->dataBase = fopen('PersonData.csv', 'rw+');
        $this->loadPerson();
    }

    public function searchByPersCode(string $persCode)
    {
        foreach ($this->persons as $person) {
            if ($person->getPersonCode() === $persCode) {
                return $person;
            }
        }
    }

    public function saveData(PersonProfile $person): void
    {
        fputcsv($this->dataBase, $person->toArray());
    }

    private function loadPerson(): void
    {
        while (!feof($this->dataBase)) {
            $personInfo = (array) fgetcsv($this->dataBase);

            if (!empty($personInfo[0])) {
                $this->persons[] = new PersonProfile(
                    (string) $personInfo[0],
                    (string) $personInfo[1],
                    (string) $personInfo[2],
                    (string) $personInfo[3]
                );
            }
        }
    }
}
