<?php

declare(strict_types=1);

class Picture
{
    private array $rating;

    public function getTotalRating(): array
    {
        $likeCount = explode(":", file_get_contents("likes.txt"));
        return $likeCount;
    }

    public function changeRating(string $points = "0"): void
    {
        $this->rating = explode(":", file_get_contents("likes.txt"));

        if ($points === '👍') {
            $points = 0;
            $this->rating[$points]++;
        } elseif ($points === '👎') {
            $points = 0;
            $this->rating[$points]--;
        }

        file_put_contents("likes.txt", implode(":", $this->rating));
    }
}
