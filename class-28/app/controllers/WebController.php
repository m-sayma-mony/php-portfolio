<?php


namespace App\controllers;


class WebController
{
    function index(){
        return header("Location: router.php?page=home");
    }
}