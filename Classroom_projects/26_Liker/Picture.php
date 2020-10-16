<?php

declare(strict_types=1);

class Picture
{
    private string $pictureLink;
    private array $rating;

    public function __construct(string $link)
    {
        $this->pictureLink = $link;
    }

    public function getPictureLink(): string
    {
        return $this->pictureLink;
    }

    public function getRating(): array
    {
        return $this->rating;
    }

    public function upRating($points): void
    {
        $this->rating[$points]++;
    }

    public function downRating($points): void
    {
        $this->rating[$points]--;
    }

    public function storeTotalRating($totalRating): void
    {
        $this->rating = $totalRating;
    }
}
