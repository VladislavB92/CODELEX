<?php

declare(strict_types=1);

class Picture
{
    private int $id;
    private string $pictureLink;
    private array $rating;

    public function __construct(int $id, string $link)
    {
        $this->id = $id;
        $this->pictureLink = $link;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPictureLink(): string
    {
        return $this->pictureLink;
    }

    public function getRating(): array
    {
        return $this->rating;
    }

    public function plusRating($points): void
    {
        $this->rating[$points]++;
    }

    public function minusRating($points): void
    {
        $this->rating[$points]--;
    }

    public function storeTotalRating($totalRating): void
    {
        $this->rating = $totalRating;
    }
}
