<?php


namespace App\controllers;


class ServicesController
{
    public $page = 'pages/services.php';

    public function loadServicePage(){
        return $this->page;
    }
}