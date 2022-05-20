<?php

namespace App\controllers;

class CompaniesController extends Controller
{
    public function index()
    {
        require $this->view('companies');
    }

    public function create()
    {
        require $this->view('company_new');
    }

    public function show()
    {
        require $this->view('company_details');
    }
}