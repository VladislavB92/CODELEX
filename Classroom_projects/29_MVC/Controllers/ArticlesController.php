<?php

declare(strict_types=1);

require_once __DIR__ . '/../Models/Article.php';

$articles = [
    new Article('Covid uzbruk!', 'Content 1'),
    new Article('Jauns prezidents!', 'Content 2'),
    new Article('Sveicieni Helovinos!', 'Content 3')
];

require_once __DIR__ . '/../Views/ArticlesView.php';
