<?php


class PersonProfile
{
    private string $name;
    private string $surname;
    private string $personCode;
    private string $address;

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPersonCode(): string
    {
        return $this->personCode;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function setPersonCode(string $personCode): void
    {
        $this->personCode = $personCode;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function saveData():void
    {
        $personArray = (array) $this;
        $dataBase = fopen('PersonData.csv', 'a');
        fputcsv($dataBase, $personArray);
        fclose($dataBase);
    }
}
