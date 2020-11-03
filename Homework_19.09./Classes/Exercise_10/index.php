<?php

declare(strict_types=1);

require_once 'Video.php';
require_once 'VideoStore.php';

$videoStoreTest = new VideoStore();

$videoStoreTest->addVideo(new Video('The Matrix'));
$videoStoreTest->addVideo(new Video('Godfather II'));
$videoStoreTest->addVideo(new Video('Star Wars Episode IV: A New Hope'));

foreach($videoStoreTest->listInventory() as $video){
    echo 'Title: ' . $video->getTitle() . PHP_EOL;
    echo 'Average rating: ' . $video->getAvgUserRating() . PHP_EOL;
    echo 'Avalaible? ' . $video->getAvalaibility() . PHP_EOL;
    echo "\n";
}