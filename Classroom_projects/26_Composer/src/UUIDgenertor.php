<?php

namespace App;

use Ramsey\Uuid\Uuid;

class UUIDgenerator
{
    private string $userName;
    private Uuid $uuid;

    public function __construct(string $userName, Uuid $uuid)
    {
        $this->userName = $userName;
        $this->uuid = $uuid;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getUuid(): Uuid
    {
        return $this->uuid;
    }
}