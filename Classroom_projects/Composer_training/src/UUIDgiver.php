<?php

namespace App;
use Ramsey\Uuid\Uuid as Uuid;

class UUIDgiver
{
    private string $userName;
    private $uuid;

    public function __construct(string $userName, $uuid)
    {
        $this->userName = $userName;
        $this->uuid = $uuid;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getUuid()
    {
        return $this->uuid;
    }
}