<?php


namespace App\controllers;


class ResumeController
{
    public $page = 'pages/resume.php';

    public function loadResumePage(){
        return $this->page;
    }
}