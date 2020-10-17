<?php

declare(strict_types=1);

class Picture
{
    private int $id;
    private int $rating;

    public function __construct(int $id, int $rating)
    {
        $this->id = $id;
        $this->rating = $rating;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function plusRating(): void
    {
        $this->rating++;
    }

    public function minusRating(): void
    {
        $this->rating--;
    }
}
