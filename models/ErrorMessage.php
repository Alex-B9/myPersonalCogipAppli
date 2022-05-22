<?php

namespace App\models;

class ErrorMessage
{
    public function firstnameError(): string
    {
        return "Error: incorrect firstname !";
    }

    public function lastnameError(): string
    {
        return "Error: incorrect lastname !";
    }

    public function emailError(): string
    {
        return "Error: incorrect mail !";
    }

    public function passwordError(): string
    {
        return "Error: incorrect password !";
    }

    public function errorUserExist(): string
    {
        return "Error: user already exist !";
    }

    public function incorrectInformation(): string
    {
        return "Error: incorrect information !";
    }

    public function companyNameError(): string
    {
        return "Error: incorrect company name !";
    }

    public function companyVatError(): string
    {
        return "Error: incorrect VAT !";
    }

    public function companyCountry(): string
    {
        return "Error: incorrect country !";
    }
}