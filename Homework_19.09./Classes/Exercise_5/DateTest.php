<?php

declare(strict_types=1);

class DateTest
{
    public static function DisplayDate(Date $date)
    {
        return $date->getMonth() . '/' .
            $date->getDay() . '/' .
            $date->getYear();
    }
}
