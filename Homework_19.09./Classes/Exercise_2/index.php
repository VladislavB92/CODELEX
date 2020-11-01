<?php

declare(strict_types=1);

// Exercise #2
/* Write a method named swap_points 
that accepts two Points as parameters and swaps their x/y values.

Consider the following example code that calls swapPoints:

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
swap_points(p1, p2);
echo "(" . p1.x . ", " . p1.y . ")";
echo "(" . p2.x . ", " . p2.y . ")";

The output produced from the above code should be:

(-3, 6)
(5, 2)
*/

include 'Point.php';

$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);

$p1->swapPoints($p1, $p2);
echo "(" . $p1->getX() . ", " . $p1->getY() . ")" . PHP_EOL;
echo "(" . $p2->getX() . ", " . $p2->getY() . ")" . PHP_EOL;
