<?php

// Uztaisīt objektus, kas aprēķina laukumus figūrām.
// 1. Klase -> figūrām kopējām.
// 2. Inheritance klase -> katrai figūrai atsevišķi
// 3. Triangle, rectangle, circle.
// Abstract - nozīmē, ka klase pati par sevi nevar pastāvēt

abstract class Shapes
{

    public abstract function getName(): string;

    public abstract function getArea(): float;
}

class Triangle extends Shapes
{
    private string $name;
    private float $length;
    private float $height;

    public function __construct(string $name, float $length, float $height)
    {
        $this->name = $name;
        $this->length = $length;
        $this->height = $height;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getArea(): float
    {
        return $this->length * $this->height * 0.5;
    }
}

class Rectangle extends Shapes
{
    private string $name;
    private float $length;
    private float $width;

    public function __construct(string $name, float $length, float $width)
    {
        $this->name = $name;
        $this->length = $length;
        $this->width = $width;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getArea(): float
    {
        return $this->length * $this->width;
    }
}

class Circle extends Shapes
{
    private string $name;
    private float $radius;

    public function __construct(string $name, float $radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getArea(): float
    {
        return pi() * pow($this->radius, 2);
    }
}

class ShapeCollection
{

    private $shapes = [];

    public function add(Shapes $shape): void
    {
        $this->shapes[] = $shape;
    }
    public function all(): array
    {
        return $this->shapes;
    }
}

$shapes = new ShapeCollection();

$shapes->add(new Triangle("triangle", 3.0, 4.0));
$shapes->add(new Rectangle("rectangle", 3.5, 5.6));
$shapes->add(new Circle("circle", 4));

foreach ($shapes->all() as $shape) {
    echo "The area of " .
        $shape->getName() . " is " .
        round($shape->getArea(), 3) .
        " cm" . PHP_EOL;
}
