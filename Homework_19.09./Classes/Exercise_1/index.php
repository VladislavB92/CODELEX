<?php

declare(strict_types=1);

// Exercise #1
/* Create a class Product that represents a product sold in a shop. 
A product has a price, amount and name.

The class should have:

- A constructor Product(string name, double price_at_start, int amount_at_start)
- A function print_product() that prints a product in the following form:

    Banana, price 1.1, amount 13

Test your code by creating a class with main method and add three products there:

    - "Logitech mouse", 70.00 EUR, 14 units
    - "iPhone 5s", 999.99 EUR, 3 units
    - "Epson EB-U05", 440.46 EUR, 1 units

Print out information about them.

Add new behaviour to the Product class:

    - possibility to change quantity
    - possibility to change price

Reflect your changes in a working application.
*/

include 'Product.php';

echo "\n==Products in the warehouse==\n";

$products = [
    $mouse = new Product(0, "Logitech mouse", 70.00, 14),
    $phone = new Product(1, "iPhone 5s", 999.99, 3),
    $printer = new Product(2, "Epson EB-U05", 440.46, 1)
];

foreach ($products as $product) {
    $product->printProduct();
    echo "\n";
}

$updPrice = "";
$updAm = "";

while ($updAm !== "Y" || $updAm !== "n") {

    $updAm = readline("Update amount? [Y/n] ");

    if ($updAm === "Y") {

        $iD = (int) readline("\nTo which product? Type ID: ");
        $amount = (int) readline("\nWhat is the amount? ");
        $products[$iD]->changeAmount($amount);
        echo "\nUPDATED!!\n";
        echo $products[$iD]->printProduct() . PHP_EOL;
    } elseif ($updAm === "n") {

        $updPrice = readline("Update price? [Y/n] ");

        if ($updPrice === "Y") {

            $iD = (int) readline("\nTo which product? Type ID: ");
            $price = (int) readline("What the price will be? ");
            $products[$iD]->changePrice($price);
            echo "\nUPDATED!!\n";
            echo $products[$iD]->printProduct() . PHP_EOL;
        } elseif ($updPrice === "n") {
            exit("Bye!\n");
        }
    }
}
