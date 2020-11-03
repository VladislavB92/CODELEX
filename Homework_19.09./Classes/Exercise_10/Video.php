<?php

declare(strict_types=1);

class Video
{
    private string $title;
    private bool $avalaible;
    private int $rating;
    private int $avgUserRating;

    public function __construct(string $title) 
    {
        $this->title = $title;
    }

    public function checkOut(): void
    {
        $this->avalaible = false;
    }

    public function return(): void
    {
        $this->avalaible = true;
    }

    public function rateVideo(int $rating): void
    {
        $this->rating = $rating;
    }

}
