<?php

require "vendor/autoload.php";

use App\UUIDgiver;
use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid4();

$user = new UUIDgiver('Michael Jordan', $uuid);

echo "User " . $user->getUserName() .
    " gets random uuid: " . $user->getUuid() . PHP_EOL;
