<?php

declare(strict_types=1);

class VideoStore
{
    private array $inventory = [];

    public function listInventory(): array
    {
        return $this->inventory;
    }

    public function addVideo(Video $video): void
    {
        $this->inventory[] = $video;
    }
}