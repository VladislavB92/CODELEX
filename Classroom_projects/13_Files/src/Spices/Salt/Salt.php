<?php

namespace src\Spices;

class Salt extends Spices
{
    private string $name;
    private string $taste;
    private string $color;

    public function __construct(
        string $name, 
        string $taste, 
        string $color
        ){
        $this->name = $name;
        $this->taste = $taste;
        $this->color = $color;
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
}