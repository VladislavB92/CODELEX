<?php

declare(strict_types=1);

class MovieCollection
{
    private array $movies = [];

    public function add(Movie $movie): void
    {
            $this->movies[] = $movie;
    }

    public function all(): array
    {
        return $this->movies;
    }
}
