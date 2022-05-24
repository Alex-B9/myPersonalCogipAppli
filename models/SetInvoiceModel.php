<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetInvoiceModel
{
    private string $invoiceNumber;
    private string $invoiceDate;
    private int $companyId;
    private int $peopleId;

    private CreateModel $dbCreate;

    public function __construct()
    {
        $this->dbCreate = new CreateModel();
    }

    public function setInvoiceNumber(string $invoiceNumber): SetInvoiceModel
    {
        $this->invoiceNumber = htmlspecialchars($invoiceNumber);

        return $this;
    }

    public function setDate(string $invoiceDate): SetInvoiceModel
    {
        $this->invoiceDate = date('Y-m-d', strtotime($invoiceDate));

        return $this;
    }

    public function setCompanyId(int $invoiceCompany): SetInvoiceModel
    {
        $this->companyId = htmlspecialchars($invoiceCompany);

        return $this;
    }

    public function setContactId(int $invoiceContact): SetInvoiceModel
    {
        $this->peopleId = htmlspecialchars($invoiceContact);

        return $this;
    }

    public function setInvoiceDb(): void
    {
        $this->dbCreate->createInvoice($this->companyId, $this->peopleId, $this->invoiceNumber, $this->invoiceDate);
    }
}