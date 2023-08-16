<?php


namespace App\controllers;


class WorkController
{
    public $page = 'pages/works.php';

    public function loadWorkPage(){
        return $this->page;
    }
}