<?php

declare(strict_types=1);

require_once 'Account.php';

$accountBen = new Account('Benson', -17.25);

echo $accountBen->showUserNameAndBalance();
