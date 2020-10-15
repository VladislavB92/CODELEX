<?php 

declare(strict_types=1);

require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use App;

$uuid = Uuid::uuid4();

$user = new UUIDgenerator('user1', $uuid);


$user->getUuid();