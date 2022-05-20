<?php

namespace App\controllers;

class Request
{
    public static array $data;

    public static function get(): array
    {
        return self::$data = $_POST;
    }
}