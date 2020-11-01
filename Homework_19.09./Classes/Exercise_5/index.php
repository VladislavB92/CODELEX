<?php

declare(strict_types=1);

require_once 'Date.php';
require_once 'DateTest.php';

$date = new Date();

echo DateTest::DisplayDate($date) . PHP_EOL;
