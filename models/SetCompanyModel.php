<?php

namespace App\models;

class SetCompanyModel
{
    private $name;
    private $country;
    private $vatNumber;

    public function setName($name)
    {
        $this->name = htmlspecialchars($name);
    }

    public function setCountry($country)
    {
        $this->country = htmlspecialchars($country);
    }

    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = htmlspecialchars($vatNumber);
    }
}