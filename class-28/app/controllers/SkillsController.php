<?php


namespace App\controllers;


class SkillsController
{
    public $page = 'pages/skills.php';

    public function loadSkillsPage(){
        return $this->page;
    }
}