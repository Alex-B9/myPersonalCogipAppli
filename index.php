<?php

use App\controllers\CompaniesController;
use App\controllers\ContactController;
use App\controllers\HomeController;
use App\controllers\InvoicesController;
use App\controllers\ConnexionController;
use App\controllers\DashboardController;

require __DIR__ . '/vendor/autoload.php';

$router = new AltoRouter();

$router->map('GET', '/', function () {
    $home = new HomeController();
    $home->index();
});

$router->map('GET', '/connect', function () {
    $connect = new ConnexionController();
    $connect->index();
});

$router->map('POST', '/connect-get', function () { // marche pas.
    $connect = new ConnexionController();
    $connect->get();
});

$router->map('GET', '/contacts', function () {
    $contact = new ContactController();
    $contact->index();
});

$router->map('GET', '/contact-new', function () {
    $contact = new ContactController();
    $contact->create();
});

$router->map('POST', '/contact-store', function () {
    $contact = new ContactController();
    $contact->store();
});

$router->map('GET', '/contact-details', function () {
    $contact = new ContactController();
    $contact->show();
});

$router->map('GET', '/invoices', function () {
    $invoices = new InvoicesController();
    $invoices->index();
});

$router->map('GET', '/invoice-new', function () {
    $invoices = new InvoicesController();
    $invoices->create();
});

$router->map('POST', '/invoice-store', function () {
    $invoices = new InvoicesController();
    $invoices->store();
});

$router->map('GET', '/invoice-details', function () {
    $invoices = new InvoicesController();
    $invoices->show();
});

$router->map('GET', '/companies', function () {
    $companies = new CompaniesController();
    $companies->index();
});

$router->map('GET', '/company-new', function () {
    $companies = new CompaniesController();
    $companies->create();
});

$router->map('POST', '/company-store', function () {
    $companies = new CompaniesController();
    $companies->store();
});

$router->map('GET', '/company-details', function () {
    $companies = new CompaniesController();
    $companies->show();
});

$match = $router->match();

if ($match !== null) {
    $match['target']();
}
