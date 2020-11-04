<?php

declare(strict_types=1);

class UserProfile
{
    private string $id;
    private string $name;
    private string $pincode;

    public function __construct(string $id, string $name, string $pincode)
    {
        $this->id = $id;
        $this->name = $name;
        $this->pincode = $pincode;
    }

    public function getId(): string
    {
        return $this->id;
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
