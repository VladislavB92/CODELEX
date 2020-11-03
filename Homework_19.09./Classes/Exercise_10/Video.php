<?php

declare(strict_types=1);

class Video
{
    private string $title;
    private bool $avalaible = true;
    private array $rating = [];
    private string $avgUserRating = '0';

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAvalaibility(): string
    {
        if ($this->avalaible === true) {
            return 'Avalaible';
        }
        return 'Not avalaible';
    }

    public function getAvgUserRating(): string
    {
        if (count($this->rating) != 0) {
            return $this->avgUserRating = 
            (string) array_sum($this->rating) / count($this->rating);
        }
        return 'No rating';
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
        $this->rating[] = $rating;
    }
}
