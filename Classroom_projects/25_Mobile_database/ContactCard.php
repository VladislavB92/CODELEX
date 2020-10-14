<?php

declare(strict_types=1);

class ContactCard
{
    private string $name = 'name';
    private string $surname = 'surname';
    private int $number = 0;

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function toArray(): array
    {
        return [
            'Name' => $this->getName(),
            'Surname' => $this->getSurname(),
            'Number' => $this->getNumber()
        ];
    }
}
