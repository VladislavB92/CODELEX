<?php

declare(strict_types=1);

class ImageController
{
    private $photoStorage;
    private array $images;
    private $csvStorage; // resource type

    public function __construct()
    {
        $this->photoStorage = fopen('databases/image_links.csv', 'a+');
        $this->loadImages();
        $this->csvStorage = fopen('databases/csv_storage.csv', 'a+');
    }

    public function getImageNames(): array
    {
        return $this->images;
    }

    public function getTotalRating(): array
    {
        $rows = array_map('str_getcsv', file('databases/csv_storage.csv'));

        $temp = [];

        foreach ($rows as $imageData) {

            if (!array_key_exists($imageData[0], $temp)) {
                $temp[$imageData[0]] = 0;
            }

            $temp[$imageData[0]] += intval($imageData[1]);
        }
        
        return $temp;
    }

    public function changeRating(string $points = '0', Picture $picture): void
    {
        if ($points === '❤️') {

            $points = '0';
            $picture->plusRating();
        } elseif ($points === '👎') {

            $points = '0';
            $picture->minusRating();
        }

        $data = $picture->getId() . ':' . $picture->getRating();

        $imageData = explode(':', $data);

        fputcsv($this->csvStorage, $imageData);
    }

    public function loadImages(): void
    {
        while (!feof($this->photoStorage)) {
            $line = fgetcsv($this->photoStorage);
            if (!empty($line)) {
                $this->images[] = implode('', $line);
            }
        }
    }
}
