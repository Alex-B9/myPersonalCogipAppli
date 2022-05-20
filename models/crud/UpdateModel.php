<?php

namespace App\models\crud;

use App\models\Database;
use App\models\GetPeopleModel;

class UpdateModel
{
    private $db;

    private $user;

    public function __construct(GetPeopleModel $getUserModel)
    {
        $this->db=Database::connect();
        $this->user = $getUserModel;
    }

    public function UpdateUserMail($newEmail)
    {
            $sql = "UPDATE `people` SET `email`='{$newEmail}' WHERE `email` = {$this->user->getEmail()}  ";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
    }

    public function UpdateUserPass($newPass)
    {
            $newPass = htmlspecialchars(password_hash($newPass, PASSWORD_DEFAULT));

            $sql = "UPDATE `people` SET `password`='{$newPass}' WHERE `email` = {$this->user->getEmail()}  ";
            $stmt = $this->db->prepare($sql);
            return $stmt->execute();
    }
}