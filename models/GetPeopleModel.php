<?php

// link avec contact new .

namespace App\models;

use App\models\crud\ReadModel;

class GetPeopleModel
{
    private string $firstname;
    private string $lastname;
    private string $email;
    private int $phone;

    private ReadModel $dbRead;

    public function __construct($email)
    {
        $this->email = $email;
        $this->dbRead = new ReadModel();
    }

    public function getFirstname(): string
    {
        $this->firstname = $this->dbRead->getEmailByRow($this->email, 'people')['firstname'];

        Database::disconnect();

        return $this->firstname;
    }

    public function getLastname(): string
    {
        $this->lastname = $this->dbRead->getEmailByRow($this->email, 'people')['lastname'];

        Database::disconnect();

        return $this->lastname;
    }

    public function getEmail(): string
    {
        $this->email = $this->dbRead->getEmailByRow($this->email, 'people')['email'];

        Database::disconnect();

        return $this->email;
    }

    public function getPhone(): int
    {
        $this->phone = $this->dbRead->getEmailByRow($this->email, 'people')['Phone'];

        Database::disconnect();

        return $this->phone;
    }

    public function getCompany()
    {
    }
}