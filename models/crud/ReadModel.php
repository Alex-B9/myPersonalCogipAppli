<?php

// OK

namespace App\models\crud;

use App\models\Database;

class ReadModel
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAllPeople(): bool|array
    {
        $sql = "SELECT * FROM people";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getEmailByRow($email, $tableName)
    {
        $sql = "SELECT * FROM $tableName WHERE email = '$email'";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }


}