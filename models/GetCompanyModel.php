<?php

namespace App\models;

use App\models\crud\ReadModel;

class GetCompanyModel
{
    private int $id;
    private string $name;
    private string $country;
    private string $vatNumber;

    private ReadModel $readDb;

    public function __construct($id)
    {
        $this->id = $id;
        $this->readDb = new ReadModel();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function getVatNumber(): string
    {
        return $this->vatNumber;
    }
}