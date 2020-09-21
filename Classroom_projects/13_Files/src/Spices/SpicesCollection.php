<?php

namespace src\Spices;

use src\Spices\Spices;

class SpicesCollection
{

    private $spices = [];

    public function add(Spices $spice): void
    {
        $this->spices[] = $spice;
    }
    public function all(): array
    {
        return $this->spices;
    }
}