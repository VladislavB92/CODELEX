<?php

declare(strict_types=1);

class RatingChanger
{

    public function getTotalRating(): array
    {
        $likeCount = explode(":", file_get_contents("points.txt"));
        return $likeCount;
    }

    public function changeRating(string $points = "0", Picture $picture): void
    {
        $picture->storeTotalRating(explode(":", file_get_contents("points.txt")));

        if ($points === '👍') {
            $points = 0;
            $picture->upRating($points);
        } elseif ($points === '👎') {
            $points = 0;
            $picture->downRating($points);
        }

        file_put_contents("points.txt", implode(":", $picture->getRating()));
    }
}
