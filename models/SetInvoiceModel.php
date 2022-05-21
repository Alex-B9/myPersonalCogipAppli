<?php

namespace App\models;

use App\models\crud\CreateModel;

class SetInvoiceModel
{
    private int $invoiceNumber;
    private string $lastname;
    private string $email;

    private CreateModel $dbCreate;

    public function setInvoiceNumber(int $invoiceNumber): void
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setInvoiceDb(): void
    {
        $this->dbCreate->createInvoice(); // heuu il y a des choses a faire... !
    }
}