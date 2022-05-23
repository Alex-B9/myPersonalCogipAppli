<?php

namespace App\controllers;

use App\models\ErrorMessage;
use App\models\SetCompanyModel;

class CompaniesController extends Controller
{
    public function index()
    {
        require $this->view('companies');
    }

    public function create()
    {
        require $this->view('company_new');
    }

    public function show()
    {
        require $this->view('company_details');
    }

    public function store()
    {
        if (isset($_POST)) {
            $validate = new ValidateData();
            $setCompany = new SetCompanyModel();
            $error = new ErrorMessage();

            $companyName = Request::get()['companyName'];
            $companyVat = $validate->vatIsValid(Request::get()['companyTVA']);
            $companyCountry = $validate->countryIsValid(Request::get()['companyCountry']);
            $companyType = Request::get()['companyType'];

            if ($companyName) {
                $setCompany->setName($companyName);
            } else {
                echo $error->companyNameError();
            }

            if ($companyVat) {
                $setCompany->setVatNumber($companyVat);
            } else {
                echo $error->companyVatError();
            }

            if ($companyCountry) {
                $setCompany->setCountry($companyCountry);
            } else {
                echo $error->companyCountryError();
            }

            if ($companyType) {
                $setCompany->setCompanyType($companyType);
            }

            if ($companyName && $companyVat && $companyCountry) {
                $setCompany->setCompanyDb();
            } else {
                echo $error->incorrectInformation();
            }

             header('location: /companies');
        }
    }
}