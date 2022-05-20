<?php

namespace App\models;

class GetCompanyModel
{
    private $name;
    private $country;
    private $vatNumber;

    public function getName()
    {
        return $this->name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getVatNumber()
    {
        return $this->vatNumber;
    }
}