<?php

$classes = scandir('src/Spices/');

function includeClass($directory) {
    foreach ($directory as $spices) {
        include 'src/Spices/' . 
         $spices .
        $spices . '.php';
    }

};