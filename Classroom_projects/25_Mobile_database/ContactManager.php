<?php

declare(strict_types=1);

class ContactManager
{
    private $database;
    private array $persons = [];

    public function __construct()
    {
        $this->database = fopen('numbers.csv', 'rw+');
        $this->loadContactCard();
    }

    public function searchByNumber(int $number)
    {
        foreach ($this->persons as $person) {
            if ($person->getNumber() === $number) {
                return $person;
            }
        }
    }

    public function saveData(ContactCard $contactCard): void
    {
        fputcsv($this->database, $contactCard->toArray());
    }

    private function loadContactCard(): void
    {
        while (!feof($this->database)) {
            $contactCard = (array) fgetcsv($this->database);

            if (!empty($contactCard[0])) {
                $this->persons[] = new ContactCard(
                    (string) $contactCard[0],
                    (string) $contactCard[1],
                    (int) $contactCard[2],
                );
            }
        }
    }
}
