<?php


namespace App\controllers;


class HomeController
{
    public $page = 'pages/home.php';

    public function lodeHomePage(){
        return $this->page;
    }
}