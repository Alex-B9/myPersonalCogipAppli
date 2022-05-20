<?php

namespace App\models;

use App\models\crud\ReadModel;

class GetUserModel
{
    private $email;
    private $password;

    private $dbRead;

    public function __construct($email)
    {
        $this->dbRead = new ReadModel();
        $this->email = $email;
    }

    public function getEmail()
    {
        $this->email = $this->dbRead->getEmailFromTable($this->email, 'user')['email'];

        Database::disconnect();

        return $this->email;
    }

    public function getPassword()
    {
        $this->password = $this->dbRead->getEmailFromTable($this->email, 'user')['password'];

        Database::disconnect();

        return $this->password;
    }
}