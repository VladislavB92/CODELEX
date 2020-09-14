<?php

function greeting()
{
    echo "Hello, World!" . PHP_EOL;
}

function crntTime()
{
    date_default_timezone_set("Europe/Riga");
    echo "Current time is " . date('Y-m-d H:i:s') . PHP_EOL;
}
