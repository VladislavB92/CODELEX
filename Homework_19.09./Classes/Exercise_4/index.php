<?php

declare(strict_types=1);

require_once 'Movie.php';
require_once 'MovieCollection.php';
require_once 'RatingFilter.php';

// Exercise 4

$movieCollection = new MovieCollection();

$movieCollection->add(
    new Movie("Casino Royale", "Eon Productions", "PG13")
);
$movieCollection->add(
    new Movie("Glass", "Buena Vista International", "PG13")
);
$movieCollection->add(
    new Movie("Spider-Man: Into the Spider-Verse", "Columbia Pictures", "PG")
);

$PG = RatingFilter::getPG($movieCollection->all());

foreach ($PG as $movie) {
    echo 'Title: ' . $movie->getTitle() . PHP_EOL;
    echo 'Studio: ' . $movie->getStudio() . PHP_EOL;
    echo 'Rating: ' . $movie->getRating() . PHP_EOL;
    echo "\n";
}
