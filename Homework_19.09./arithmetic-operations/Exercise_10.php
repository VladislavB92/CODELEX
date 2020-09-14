<?php

// Exercise #10
/* 
Design a Geometry class with the following methods:

A static method that accepts the radius of a circle and returns the area of the circle. 
Use the following formula:

Area = π * r * 2
Use Math.PI for π and r for the radius of the circle

A static method that accepts the length and width of a rectangle 
and returns the area of the rectangle.
Use the following formula:

Area = Length x Width

A static method that accepts the length of a triangle’s base and the triangle’s tr_height.
The method should return the area of the triangle. 
Use the following formula:

Area = Base x Height x 0.5

The methods should display an error message 
if negative values are used for the circle’s radius,
the rectangle’s length or width, or the triangle’s base or tr_height.
Next write a program to test the class, 
which displays the following menu and responds to the user’s selection:
*/

class Geometry
{
    static function getCircleArea($circ_radius)
    {
        if ($circ_radius > 0) {
            $circle_area = pi() * $circ_radius * 2;
            echo "\nThe AREA of the circle is " . round($circle_area, 2) . PHP_EOL;
        } else {
            echo "\nError! Input can't be negative!\n";
        }
    }

    static function getRectangleArea($rec_length, $rec_width)
    {
        if ($rec_length > 0 && $rec_width > 0) {
            $rectangle_area = $rec_length * $rec_width;
            echo "\nThe AREA of the triangle is " . round($rectangle_area, 2) . PHP_EOL;
        } else {
            echo "\nError! Input can't be negative!\n";
        }
    }

    static function getTriangleArea($tr_bs_length, $tr_height)
    {
        if ($tr_bs_length > 0 && $tr_height > 0) {
            $triangle_area = $tr_bs_length * $tr_height * 0.5;
            echo "\nThe AREA of the triangle is " . round($triangle_area) . PHP_EOL;
        } else {
            echo "\nError! Input can't be negative!\n";
        }
    }
}

$geometry_calculator = new Geometry;

echo "\nWelcome to Geometry calculator!\n\nChoose your option:\n";

$options = "\nPress '1' to Calculate the Area of a Circle
Press '2' to Calculate the Area of a Rectangle
Press '3' to Calculate the Area of a Triangle
Press '4' to quit\n";

echo $options;

$answer = "";
$show_options = false;

while ($answer != "1" || $answer != "2" || $answer != "3" || $answer != "4") {
    if ($show_options) {
        echo $options;
    }

    $answer = readline("\nI choose: ");

    if ($answer == "1") {
        $crc_rad = readline("Enter the RADIUS of a circle: ");
        $geometry_calculator->getCircleArea($crc_rad);
        $show_options = true;
    } elseif ($answer == "2") {
        $rec_lngth = readline("Enter the LENGTH of the rectangle: ");
        $rec_wdth = readline("\nEnter the WIDTH of the rectangle: ");
        $geometry_calculator->getRectangleArea($rec_lngth, $rec_wdth);
        $show_options = true;
    } elseif ($answer == "3") {
        $tr_bs_lngth = readline("Enter the BASE LENGTH of the triangle: ");
        $tr_hght = readline("\nEnter the HEIGHT of the triangle: ");
        $geometry_calculator->getTriangleArea($tr_bs_lngth, $tr_hght);
        $show_options = true;
    } elseif ($answer == "4") {
        exit("Bye!\n");
        $show_options = false;
    } else {
        echo "Error! This option does not exist!\n";
        $show_options = true;
    }
}
