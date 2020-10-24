<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Article;

class ArticlesController
{
    private array $articles;

    public function __construct()
    {
        $this->articles = [
            new Article('Covid uzbruk!', 'Content 1'),
            new Article('Jauns prezidents!', 'Content 2'),
            new Article('Sveicieni Helovinos!', 'Content 3')
        ];
    }

    public function index()
    {
        $articles = $this->articles;

        require_once __DIR__ . '/../Views/ArticlesIndexView.php';
    }

    public function show(array $vars)
    {
        $id = (int) $vars['id'];
        $article = $this->articles[$id - 1];

        require_once __DIR__ . '/../Views/ArticlesShowView.php';


    }
}
