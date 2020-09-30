<?php

/* 
Basket (munition store) with weapons (2) and explosives (2).
In total 4 objects.
All objects store in a collection.
Itterating through arsenal, if the item is an explosive, we have to detonate it (with function).
Output: arsenal.
*/

interface IsExplosiveInterface
{
    public function getName();
    public function getState();
    public function explode();
}

class Kalashnikov
{
    private string $name = "Kalashnikov";

    public function getName(): string
    {
        return $this->name;
    }
}

class TNT implements IsExplosiveInterface
{
    private string $name = "TNT";
    private string $state = "normal";

    public function getName(): string
    {
        return $this->name;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function explode(): void
    {
        $this->state = "EXPLODED!";
    }
}

class Bazooka
{
    private string $name = "Bazooka";

    public function getName(): string
    {
        return $this->name;
    }
}

class Granade implements IsExplosiveInterface
{
    private string $name = "Granade";
    private string $state = "normal";

    public function getName(): string
    {
        return $this->name;
    }
    public function explode(): void
    {
        $this->state = "EXPLODED!";
    }

    public function getState(): string
    {
        return $this->state;
    }
}

class AmunitionCollection
{
    public array $amunition = [];

    public function add($items): void
    {
        $this->amunition[] = $items;
    }

    public function all(): array
    {
        return $this->amunition;
    }
}

$shop = new AmunitionCollection();
$shop->add(new Kalashnikov());
$shop->add(new TNT());
$shop->add(new Bazooka());
$shop->add(new Granade());

foreach ($shop->all() as $item) {
    if ($item instanceof IsExplosiveInterface) {
        echo $item->getName() . " - " . $item->explode() . $item->getState() . PHP_EOL;
    } else {
        echo $item->getName() . " - is OKAY" . PHP_EOL;
    }
}
