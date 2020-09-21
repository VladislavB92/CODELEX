<?php

namespace src\Spices;

class Paprika extends Spices
{
    private string $name;
    private string $taste;
    private string $color;
    private string $spiceness;

    public function __construct(
        string $name,
        string $taste, 
        string $color, 
        string $spiceness
    ){
        $this->name = $name;
        $this->taste = $taste;
        $this->color = $color;
        $this->spiceness = $spiceness;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTaste(): string
    {
        return $this->taste;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getSpicy(): string
    {
        return $this->spiceness;
    }
}