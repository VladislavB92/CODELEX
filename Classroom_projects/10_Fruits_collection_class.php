<?php

abstract class Fruit
{
    public abstract function getName(): string;
    public abstract function getColor(): string;
}

class Banana extends Fruit
{
    private string $name;
    private string $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

class Apple extends Fruit
{
    private string $name;
    private string $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

class Orange extends Fruit
{
    private string $name;
    private string $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }
}

class FruitsCollection
{
    private $fruits = [];

    public function add(Fruit $fruits): void
    {
        $this->fruits[] = $fruits;
    }

    public function all(): array
    {
        return $this->fruits;
    }
}

$fruits = new FruitsCollection();

$fruits->add(new Banana("banana", "yellow"));
$fruits->add(new Apple("apple", "red"));
$fruits->add(new Orange("orange", "orange"));

foreach ($fruits->all() as $fruit) {
    echo "This " . $fruit->getName() .
        " has the color of " .
        $fruit->getColor() . "."
        . PHP_EOL;
}