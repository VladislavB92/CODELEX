<?php

declare(strict_types=1);

class ContactManager
{
    private $database;
    private array $contacts = [];

    public function __construct()
    {
        $this->database = fopen('contacts.csv', 'rw+');
        $this->loadContactCard();
    }

    public function searchByNumber(int $number)
    {
        if (isset($number)) {
            foreach ($this->contacts as $contactCard) {
                if ($contactCard->getNumber() === $number) {
                    return $contactCard;
                }
            }
        }
    }

    private function loadContactCard(): void
    {
        while (!feof($this->database)) {
            $contactCard = (array) fgetcsv($this->database);

            if (!empty($contactCard[0])) {
                $this->contacts[] = new ContactCard(
                    (string) $contactCard[0],
                    (string) $contactCard[1],
                    (int) $contactCard[2]
                );
            }
        }
    }
}
