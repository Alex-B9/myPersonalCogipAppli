<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetContactModel;

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
        $validate = new ValidateData();
        $setContact = new SetContactModel();
        $error = new ErrorMessage();

        $id = Request::get()['company'];
        $lastname = $validate->nameIsValid(Request::get()['lastname']);
        $firstname = $validate->nameIsValid(Request::get()['firstname']);
        $phone = $validate->phoneIsValid(Request::get()['phone']);
        $email = $validate->emailIsValid(Request::get()['email']);

        if ($id) {
            $setContact->setCompanyId($id);
        }

        if ($lastname) {
            $setContact->setLastname($lastname);
        } else {
            echo $error->lastnameError();
        }

        if ($firstname) {
            $setContact->setFirstname($firstname);
        } else {
            echo $error->firstnameError();
        }

        if ($phone) {
            $setContact->setPhone($phone);
        } else {
            echo $error->phoneError();
        }

        if ($email) {
            $setContact->setEmail($email);
        } else {
            echo $error->emailError();
        }

        if ($id && $lastname && $firstname && $phone && $email) {
            $setContact->setPeopleDb();
        } else {
            echo $error->incorrectInformation();
        }
    }

    public function show() // maybe ID ?
    {
        require $this->view('contact_details');
    }
}