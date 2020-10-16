<?php

declare(strict_types=1);

class ImageProcessor
{
    private $photoStorage;
    private array $images;

    public function __construct()
    {
        $this->photoStorage = fopen('image_links.csv', 'a+');
        $this->loadImages();
    }

    public function getImageNames(): array
    {
        return $this->images;
    }

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
            $picture->plusRating($points);
        } elseif ($points === '👎') {
            $points = 0;
            $picture->minusRating($points);
        }

        file_put_contents("points.txt", implode(":", $picture->getRating()));
    }

    public function loadImages()
    {
        while (!feof($this->photoStorage)) {
            $line = fgetcsv($this->photoStorage);
            if (!empty($line)) {
                $this->images[] = implode('', $line);
            }
        }
        echo '<pre>';
        var_dump($this->images);
        echo '</pre>';
    }
}
