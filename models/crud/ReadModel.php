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

    public function getAllInvoices(): bool|array
    {
        $sql = "SELECT Id_Company, number_invoice, date, company_name, Type 
                FROM ((invoices 
                INNER JOIN companies c ON invoices.Id_Company = c.CompaniesId)
                INNER JOIN type_company tc ON c.Id_Type = tc.Id_Type)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getInnerJoinCompanyPeople(): bool|array
    {
        $sql = "SELECT company_name, firstname, lastname, email, Phone  
                FROM (people
                INNER JOIN companies c on c.CompaniesId = people.Id_Company)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getInnerJoinCompanyType(): bool|array
    {
        $sql = "SELECT company_name, country, vat_number, Type
                FROM (companies
                INNER JOIN type_company tc on companies.Id_Type = tc.Id_Type)";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}