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

    public function createPeople(int $companyId, string $firstname, string $lastname, string $email, int $phone): void
    {
        $sql = "INSERT INTO people (id_company, firstname, lastname, email, phone) 
                VALUES (:id_company, :firstname, :lastname, :email, :Phone)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
            ':id_company' => $companyId,
            ':firstname' => $firstname,
            ':lastname' => $lastname,
            ':email' => $email,
            ':Phone' => $phone
        ));
    }

    public function createCompany(int $companyType, string $companyName, string $country, string $vatNumber): void
    {
        $sql = "INSERT INTO companies (id_type, company_name, country, vat_number) 
                VALUES (:id_type, :company_name, :country, :vat_number)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
            ':id_type' => $companyType,
            ':company_name' => $companyName,
            ':country' => $country,
            ':vat_number' => $vatNumber
        ));
    }

    public function createInvoice(int $companyId, int $companyPeople, string $invoiceNumber, string $invoiceDate): void
    {
        $sql = "INSERT INTO invoices (id_company, id_people, number_invoice, date) 
                VALUES (:id_company, :id_people, :number_invoice, :date)";

        $statement = $this->db->prepare($sql);

        $statement->execute(array(
            ':id_company' => $companyId,
            ':id_people' => $companyPeople,
            ':number_invoice' => $invoiceNumber,
            ':date' => $invoiceDate
        ));
    }
}