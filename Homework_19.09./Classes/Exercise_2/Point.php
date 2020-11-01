<?php

declare(strict_types=1);

class Point
{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function swapPoints(object &$pos1, object &$pos2): void
    {
        $tempX = $pos1->x;
        $tempY = $pos1->y;

        $pos1->x = $pos2->x;
        $pos1->y = $pos2->y;

        $pos2->x = $tempX;
        $pos2->y = $tempY;
    }

    public function getX(): int
    {
        return $this->x;
    }
    public function getY(): int
    {
        return $this->y;
    }
}
