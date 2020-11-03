<?php

declare(strict_types=1);

class Video
{
    protected string $title;
    protected bool $avalaible = true;
    protected array $rating = [];
    protected float $avgUserRating = 0.0;

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
            return 'yes';
        }
        return 'no';
    }

    public function getAvgUserRating(): string
    {
        if (count($this->rating) != 0) {
            return (string) $this->avgUserRating =
                array_sum($this->rating) / count($this->rating);
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
