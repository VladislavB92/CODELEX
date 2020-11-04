<?php

declare(strict_types=1);

class SplitPin
{
    public static function splitPin($class, $pin): array
    {
        return str_split($class->fillPin($pin));
    }
}