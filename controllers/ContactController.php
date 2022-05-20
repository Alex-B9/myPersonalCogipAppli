<?php

namespace App\controllers;

class ContactController extends Controller
{
    public function index()
    {
        require $this->view('contacts');
    }

    public function create()
    {
        require $this->view('contact_new');
    }

    public function show()
    {
        require $this->view('contact_details');
    }
}