<?php

declare(strict_types=1);

class PinManager
{
    private array $userProfileCollection;

    public function __construct()
    {
        $this->database = fopen('pin_engine/pincode.csv', 'a+');
        $this->loadUserProfiles();
    }

    private function loadUserProfiles(): array
    {
        $rows = array_map('str_getcsv', file('pin_engine/pincode.csv'));

        $this->userProfileCollection = [];

        foreach ($rows as $userData) {
            if (!array_key_exists($userData[0], $this->userProfileCollection)) {
                $this->userProfileCollection[] = new UserProfile(
                    $userData[0],
                    $userData[1]
                );
            }
        }

        return $this->userProfileCollection;
    }

    public function verifyUser(string $pinCode): array
    {
        foreach ($this->userProfileCollection as $user) {
            if ($user->getPincode() === $pinCode) {
                $_SESSION = [$user->getName() => $user->getPincode()];

                return $_SESSION;
            }
        }

        die("Wrong pincode!");
    }
}
