<?php

declare(strict_types=1);

class UserProfile
{

    private string $name;
    private string $pincode;

    public function __construct(string $name, string $pincode)
    {
        $this->name = $name;
        $this->pincode = $pincode;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPincode(): string
    {
        return $this->pincode;
    }
}