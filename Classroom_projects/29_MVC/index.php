<?php

if (isset($_GET['page'])) {
    $controller = strtolower($_GET['page']);
    $controller = ucfirst($_GET['page']) . 'Controller';
    $controllerFile = 'Controllers/' . $controller . '.php';

    if (file_exists($controllerFile)) {
        var_dump('Controller found.');

        require_once $controllerFile;
    } 
}
