<?php

namespace App\models;

use App\models\crud\ReadModel;

class GetUserModel
{
    private string $email;
    private string $password;

    private ReadModel $dbRead;

    public function __construct($email)
    {
        $this->dbRead = new ReadModel();
        $this->email = $email;
    }

    public function getEmail()
    {
        if (!is_bool($this->dbRead->getEmailByRow($this->email, 'accounts'))) {
            $this->email = $this->dbRead->getEmailByRow($this->email, 'accounts')['email'];

            Database::disconnect();

            return $this->email;
        }

        return null;
    }

    public function getPassword()
    {
        $this->password = $this->dbRead->getEmailByRow($this->email, 'accounts')['password'];

        Database::disconnect();

        return $this->password;
    }
}