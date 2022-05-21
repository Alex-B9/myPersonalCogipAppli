<?php

namespace App\controllers;

class HomeController extends Controller
{
    public function index()
    {
        require $this->view('home');
    }
}