<?php

namespace App\models\crud;

use App\models\Database;

class ReadModel
{
    private string|\PDO $db;

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

    public function getAllCompany(): bool|array
    {
        $sql = "SELECT * FROM companies";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getAllCompanyType(): bool|array
    {
        $sql = "SELECT * FROM type_company";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getCompanyByIdType(int $idType): bool|array
    {
        $sql = "SELECT * FROM companies WHERE Id_Type = $idType";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}