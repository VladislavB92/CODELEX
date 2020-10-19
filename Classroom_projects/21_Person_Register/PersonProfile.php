<?php

declare(strict_types=1);

class PersonProfile
{
    private string $name;
    private string $surname;
    private string $personCode;
    private string $address;

    public function __construct(
        string $name,
        string $surname,
        string $personCode,
        string $address
    ) {
        $this->name = $name;
        $this->surname = $surname;
        $this->personCode = $personCode;
        $this->address = $address;
    }

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

    public function toArray(): array
    {
        return [
            'Name' => $this->getName(),
            'Surname' => $this->getSurname(),
            'Personal code' => $this->getPersonCode(),
            'Address' => $this->getAddress()
        ];
    }
}
