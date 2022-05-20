<?php

namespace App\controllers;

class HomeController extends Controller
{
    public function index()
    {
        echo password_hash("root", PASSWORD_DEFAULT);

        require $this->view('home');
    }
}