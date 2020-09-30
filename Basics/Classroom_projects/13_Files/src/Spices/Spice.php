<?php

namespace src\Spices;

abstract class Spice
{
    public abstract function getName(): string;

    public abstract function getTaste(): string;

    public abstract function getColor(): string;
}