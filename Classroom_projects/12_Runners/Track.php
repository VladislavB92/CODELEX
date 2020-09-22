<?php

class Track
{
    private array $track = [];
    private bool $finishLine = false;
    private int $trackLength;

    public function __construct(int $trackLength)
    {
        $this->trackLength = $trackLength;
    }

    public function getTrack(): array
    {
        return $this->track;
    }

    public function getFinishLine(): bool
    {
        return $this->finishLine;
    }

    public function getTrackLength(): int
    {
        return $this->trackLength;
    }
}
