<?php

namespace App\controllers;

class Controller
{
    public function view($view): string
    {
        return "views/". $view . ".php";
    }
}
