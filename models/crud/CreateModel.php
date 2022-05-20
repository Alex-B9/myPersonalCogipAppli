<?php

namespace App\models\crud;

use App\models\Database;

class CreateModel
{
    private \PDO $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function createUser($companyId, $firstname, $lastname, $email, $password, $phone): void
    {
//        $sql = "INSERT INTO people (`PeopleId`,`firstname`, `lastname`, `email`, `password`) VALUES (0,'$firstname','$lastname','$email', '$password')";
//        $this->db->prepare($sql)->execute();

        $sql = "INSERT INTO people (id_company, firstname, lastname, email, password, phone) 
                VALUES (:id_company, :firstname, :lastname, :email, :password, :Phone)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
            ':id_company' => $companyId,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':password' => $password,
            ':Phone' => $phone
        ));
    }
}