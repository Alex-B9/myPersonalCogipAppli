<?php

// link avec contact new .

namespace App\models;

use App\models\crud\ReadModel;

class GetPeopleModel
{
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $dbRead;

    public function __construct($email)
    {
        $this->email = $email;
        $this->dbRead = new ReadModel();
    }

    public function getFirstname(): string
    {
        $this->firstname = $this->dbRead->getEmailFromTable($this->email, 'people')['firstname'];

        Database::disconnect();

        return $this->firstname;
    }

    public function getLastname(): string
    {
        $this->lastname = $this->dbRead->getEmailFromTable($this->email, 'people')['lastname'];

        Database::disconnect();

        return $this->lastname;
    }

    public function getEmail(): string
    {
        $this->email = $this->dbRead->getEmailFromTable($this->email, 'people')['email'];

        Database::disconnect();

        return $this->email;
    }

    public function getPhone(): int
    {
        $this->phone = $this->dbRead->getEmailFromTable($this->email, 'people')['Phone'];

        Database::disconnect();

        return $this->phone;
    }

    public function getCompany()
    {
    }
}