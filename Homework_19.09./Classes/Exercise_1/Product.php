<?php

declare(strict_types=1);

class Product
{
    private int $id;
    private string $name;
    private float $price;
    private int $amount;

    public function __construct(
        int $id,
        string $name,
        float $priceAtStart,
        int $amountAtStart
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $priceAtStart;
        $this->amount = $amountAtStart;
    }

    public function printProduct(): void
    {
        echo "ID " . $this->id . PHP_EOL;
        echo $this->name . PHP_EOL;
        echo "Price " . $this->price . " EUR\n";
        echo "Amount " . $this->amount . " units\n";
    }

    public function changeAmount(int &$amount): void
    {
        $this->amount = $amount;
    }

    public function changePrice(float &$price): void
    {
        $this->price = $price;
    }
}
