<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetInvoiceModel;

class InvoicesController extends Controller
{
    public function index()
    {
        require $this->view('invoices');
    }

    public function create()
    {
        require $this->view('invoice_new');
    }

    public function store()
    {
        $validate = new ValidateData();
        $setInvoice = new SetInvoiceModel();
        $errorMessage = new ErrorMessage();

        $invoiceNumber = $validate->invoiceNumberIsValid(Request::get()['invoiceNumber']);
        $invoiceDate = Request::get()['invoiceDate'];
        $invoiceCompany = Request::get()['invoiceCompany'];
        $invoiceContact = Request::get()['invoiceContact'];

        if ($invoiceNumber) {
            $setInvoice->setInvoiceNumber($invoiceNumber);
        } else {
            echo $errorMessage->invoiceError();
        }

        if ($invoiceDate) {
            $setInvoice->setDate($invoiceDate);
        } else {
            echo $errorMessage->DateError();
        }

        if ($invoiceCompany) {
            $setInvoice->setCompanyId($invoiceCompany);
        }

        if ($invoiceContact) {
            $setInvoice->setContactId($invoiceContact);
        }

        if ($invoiceNumber && $invoiceDate && $invoiceCompany && $invoiceContact) {
            $setInvoice->setInvoiceDb();
        } else {
            echo $errorMessage->incorrectInformation();
        }
    }

    public function show()
    {
        require $this->view('invoice_details');
    }
}