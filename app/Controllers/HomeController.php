<?php
namespace App\Controllers;

use Core\BaseController;


class HomeController extends BaseController
{
    public function index(): void
    {
        $this->render('home/index', $this->getHomeData());
    }

    public function getHomeData(): array
    {
        return [
            'title' => 'Bienvenue sur le mini-MVC',
            'message' => 'Architecture MVC minimaliste'
        ];
    }
}
