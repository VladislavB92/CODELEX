<?php

declare(strict_types=1);

class Date
{
    private string $day;
    private string $month;
    private string $year;

    public function __construct()
    {
        $this->day = date('j');
        $this->month = date('F');
        $this->year = date("Y");
    }

    public function getDay(): string
    {
        return $this->day;
    }

    public function getMonth(): string
    {
        return $this->month;
    }

    public function getYear(): string
    {
        return $this->year;
    }

    public function setDay(string $day): void
    {
        $this->day = $day;
    }

    public function setMonth(string $month): void
    {
        $this->month = $month;
    }

    public function setYear(string $year): void
    {
        $this->year = $year;
    }
}
