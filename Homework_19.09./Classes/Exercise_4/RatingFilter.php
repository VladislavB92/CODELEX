<?php

declare(strict_types=1);

class RatingFilter
{
    public static function getPG(array $movies)
    {
        $moviesWithPG = [];

        foreach ($movies as $movie) {
            if ($movie->getRating() === 'PG13') {
                $moviesWithPG[] = $movie;
            }
        }
        return $moviesWithPG;
    }
}
