<?php

if (isset($_GET['page'])) {

    $controller = strtolower($_GET['page']);
    $controller = ucfirst($controller) . 'Controller';

    $controllerFile = 'Controllers/' . $controller . '.php';

    if (file_exists($controllerFile)) {

        require_once $controllerFile;
    } else {
        echo '404 page not found';
    }
}
