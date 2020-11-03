<?php

declare(strict_types=1);

require_once 'Video.php';
require_once 'VideoStore.php';

$videoStoreTest = new VideoStore();

$videoStoreTest->addVideo($matrix = new Video('The Matrix'));
$videoStoreTest->addVideo($godfather2 = new Video('Godfather II'));
$videoStoreTest->addVideo($starWars4 = new Video('Star Wars Episode IV: A New Hope'));

$matrix->rateVideo(7);
$matrix->rateVideo(10);
$starWars4->checkOut();

foreach ($videoStoreTest->listInventory() as $video) {
    echo 'Title: ' . $video->getTitle() . PHP_EOL;
    echo 'Average rating: ' . $video->getAvgUserRating() . PHP_EOL;
    echo 'Avalaible? ' . $video->getAvalaibility() . PHP_EOL;
    echo "\n";
}