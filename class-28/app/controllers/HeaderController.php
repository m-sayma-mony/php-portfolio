<?php


namespace App\controllers;


class HeaderController
{
    public $page = 'pages/includes/header.php';

    public function loadHeader(){
        return $this->page;
    }
}