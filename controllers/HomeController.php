<?php

namespace App\controllers;

use App\models\crud\ReadModel;

class HomeController extends Controller
{
    public function index()
    {
        require $this->view('home');
    }
}