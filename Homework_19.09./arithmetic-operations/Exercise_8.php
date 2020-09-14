<?php

// Exercise #8
/* An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
For every hour over 40, they get overtime = (base pay) × 1.5.
The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
If the number of hours is greater than 60, print an error message.

Write a method that takes the hourly_wage pay and hours worked as parameters, and prints the total pay or an error.
Write a main method that calls this method for each of these employees:

    Employee 1
        $7.50 - hourly_wage pay
        35 - hours worked

    Employee 2
        $8.20 - hourly_wage pay
        47 - hours worked

    Employee 3
        $10.00 - hourly_wage pay
        73 - hours worked
*/

function calculateSalary($actual_hours, $hourly_wage, $name) {
    
    $total_pay = 0.00;
    $extra_hours = 0;

    if ($actual_hours <= 40 && $hourly_wage >= 8.00) {
        
        $total_pay = $actual_hours * $hourly_wage;
        echo "The $name have $actual_hours worked hours, 
        his hourly wage is $hourly_wage hours and got $$total_pay per week.\n";
    } 
    elseif ($actual_hours < 60 && $actual_hours > 40) {
         
        $extra_hours = $actual_hours - 40;
        $total_pay = 40 * $hourly_wage + ($extra_hours * $hourly_wage * 1.5);
        echo "The $name have $actual_hours worked hours, 
        his hourly wage is $hourly_wage hours and gets $$total_pay per week.\n";
    } 
    elseif ($actual_hours > 60 || $hourly_wage < 8.00) {
        
        echo "The $name got an error!\n";
    } 
}

$employee1 = new stdClass();
$employee1->name = "Employee 1";
$employee1->hourly_wage = 7.50;
$employee1->hours_worked = 35;

$employee2 = new stdClass();
$employee2->name = "Employee 2";
$employee2->hourly_wage = 8.20;
$employee2->hours_worked = 47;

$employee3 = new stdClass();
$employee3->name = "Employee 3";
$employee3->hourly_wage = 10.00;
$employee3->hours_worked = 73;

$employees = [$employee1, $employee2, $employee3];

function calculateForEveryone($employee) {
    $wage = $employee->hourly_wage;
    $hours = $employee->hours_worked;
    $name = $employee->name;
    calculateSalary($hours, $wage, $name);
}

foreach($employees as $employee) {
   calculateForEveryone($employee);
}