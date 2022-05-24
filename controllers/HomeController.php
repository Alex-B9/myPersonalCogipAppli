<?php

namespace App\controllers;

use App\models\crud\ReadModel;

class HomeController extends Controller
{
    public function index()
    {
        $p = new ReadModel();

        foreach ($p->getAllInvoices() as $item) {
            foreach ($item as $i) {
                echo "$i <br>";
            }
        }

        require $this->view('home');
    }
}