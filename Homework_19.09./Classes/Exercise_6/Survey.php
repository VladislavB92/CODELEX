<?php

declare(strict_types=1);

class Survey
{
    protected int $peopleSurveyed;

    public function getSurveyedPeopleCount(): int
    {
        return $this->peopleSurveyed;
    }
}
