<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetContactModel
{
    private int $companyId;
    private int $phone;
    private string $lastname;
    private string $firstname;
    private string $email;

    private CreateModel $dbCreate;

    public function __construct()
    {
        $this->dbCreate = new CreateModel();
    }

    public function setCompanyId(int $companyId): SetContactModel
    {
        $this->companyId = htmlspecialchars($companyId);

        return $this;
    }

    public function setPhone(int $phone): SetContactModel
    {
        $this->phone = htmlspecialchars($phone);

        return $this;
    }

    public function setLastname(string $lastname): SetContactModel
    {
        $this->lastname = htmlspecialchars($lastname);

        return $this;
    }

    public function setFirstname(string $firstname): SetContactModel
    {
        $this->firstname = htmlspecialchars($firstname);

        return $this;
    }

    public function setEmail(string $email): SetContactModel
    {
        $this->email = htmlspecialchars($email);

        return $this;
    }

    public function setPeopleDb(): void
    {
        $this->dbCreate->createPeople($this->companyId, $this->firstname, $this->lastname, $this->email, $this->phone);
    }
}