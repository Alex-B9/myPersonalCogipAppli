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

    public function passwordIsValid($password): string
    {
        return (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*\d)(?=\S*[-_*])\S*$/', $password)) ?  FALSE : trim($password); // 1Maj,1min,8charac,1num,
        //1special charac
    }
}
