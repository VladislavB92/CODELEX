<?php

declare(strict_types=1);

require_once 'DrinksSurvey.php';

$drinksSurvey = new DrinksSurvey(12467);

echo "Total number of people surveyed " . $drinksSurvey->getSurveyedPeopleCount() . PHP_EOL;
echo "Approximately " . $drinksSurvey->getEnergyDrinksPeopleCount() . " bought at least one energy drink\n";
echo "Of those " . $drinksSurvey->getCitrusDrinksPeopleCount() . " prefer citrus flavored energy drinks.\n";
