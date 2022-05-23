<?php

namespace App\controllers;

class ValidateData
{
    public function nameIsValid($name): string
    {
        return (!preg_match('/^[a-zA-Z]{3,20}$/', $name)) ? FALSE : stripslashes($name);
    }

    public function emailIsValid($email): string
    {
        return (!preg_match("/^[a-zA-Z_.-]{3,28}+@+[a-z]{3,15}+\.+[a-z]{2,6}$/", $email)) ? FALSE : trim($email);
    }

    public function phoneIsValid($phoneNumber): int
    {
        return (!preg_match("/^\d{5,10}$/", $phoneNumber)) ? FALSE : trim($phoneNumber);
    }

    public function companyNameIsValid($companyName): string
    {
        return (!preg_match('/^[a-zA-Z_.-]{3,34} [a-zA-Z_.-]{3,35}$/', $companyName)) ? FALSE : stripslashes($companyName);
    }

    public function countryIsValid($country): string
    {
        return (!preg_match('/^[a-zA-Z]{3,12} [a-zA-Z]{0,12}$/', $country)) ? FALSE : stripslashes($country);
    }

    public function vatIsValid($vatNumber): string
    {
        return (!preg_match("/^[A-Z]{2}+\d{5,12}$/", $vatNumber)) ? FALSE : trim($vatNumber);
    }

    public function passwordIsValid($password): string
    {
        return (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*\d)(?=\S*[-_*])\S*$/', $password)) ?  FALSE : trim($password);
    }
}
