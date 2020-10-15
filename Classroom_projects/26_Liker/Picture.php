<?php

declare(strict_types=1);

class Picture
{
    private string $name;
    private array $rating;

    public function getName(): string
    {
        return $this->name;
    }

    public function getTotalRating()
    {
        $likeCount = explode(":", file_get_contents("likes.txt"));
        return $likeCount;
    }

    public function saveLike(string $likes = "0")
    {
        $this->rating = explode(":", file_get_contents("likes.txt"));

        if ($likes === '+1') {
            $likes = 0;
            $this->rating[$likes]++;
        } elseif ($likes === '-1') {
            $likes = 0;
            $this->rating[$likes]--;
        }

        file_put_contents("likes.txt", implode(":", $this->rating));
    }
}
