<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetCompanyModel
{
    private int $companyType;
    private string $name;
    private string $country;
    private string $vatNumber;

    private CreateModel $dbCreate;

    public function __construct()
    {
        $this->dbCreate = new CreateModel();
    }

    public function setCompanyType(int $companyType): SetCompanyModel
    {
        $this->companyType = htmlspecialchars($companyType);

        return $this;
    }

    public function setName(string $name): SetCompanyModel
    {
        $this->name = htmlspecialchars($name);

        return $this;
    }

    public function setCountry(string $country): SetCompanyModel
    {
        $this->country = htmlspecialchars($country);

        return $this;
    }

    public function setVatNumber(string $vatNumber): SetCompanyModel
    {
        $this->vatNumber = htmlspecialchars($vatNumber);

        return $this;
    }

    public function setCompanyDb(): void
    {
        $this->dbCreate->createCompany($this->companyType, $this->name, $this->country, $this->vatNumber);
    }
}