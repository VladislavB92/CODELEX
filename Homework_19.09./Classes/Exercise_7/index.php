<?php

declare(strict_types=1);

require_once 'Dog.php';

$max = new Dog('Max', 'male', 'Lady', 'Rocky');
$rocky = new Dog('Rocky', 'male', 'Molly', 'Sam');
$sparky = new Dog('Sparky', 'male');
$buster = new Dog('Buster', 'male', 'Lady', 'Sparky');
$sam = new Dog('Sam', 'male');
$lady = new Dog('Lady', 'female');
$molly = new Dog('Molly', 'female');
$coco = new Dog('Coco', 'female', 'Molly', 'Buster');

echo $coco->fathersName() . PHP_EOL;
echo $sparky->fathersName() . PHP_EOL;
echo $coco->hasSameMotherAs($rocky) . PHP_EOL;