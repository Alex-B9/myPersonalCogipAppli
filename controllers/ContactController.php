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

    public function store()
    {
       echo Request::get()['lastname'] . '<br>';
       echo Request::get()['firstname'] . '<br>';
       echo Request::get()['phone'] . '<br>';
       echo Request::get()['email'] . '<br>';
       echo Request::get()['company'] . '<br>';

    }

    public function show() // maybe ID ?
    {
        require $this->view('contact_details');
    }
}