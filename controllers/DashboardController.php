<?php

namespace App\controllers;

class DashboardController extends Controller
{
    //page pricinpale.
    public function index()
    {
        require $this->view('dashboard');
    }
}