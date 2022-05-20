<?php

namespace App\controllers;

class InvoicesController extends Controller
{
    public function index()
    {
        require $this->view('invoices');
    }

    public function create()
    {
        require $this->view('invoice_new');
    }

    public function show()
    {
        require $this->view('invoice_details');
    }
}