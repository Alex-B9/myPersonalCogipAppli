<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails de la société'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Société</h1>
    <h2 id="companyName">Nom de la société</h2>
</div>
<div class="detailsContainer">
    <div class="info">
        <p>Numéro de TVA : <span id="companyVAT">numéro de TVA</span></p>
        <p>Type : <span id="companyType">client/fournisseur</span></p>
    </div>
    <div class="tableContainer">
        <h3>Personnes de contact</h3>
        <table class="tableItem">
            <tr>
                <th>Nom</th>
                <th>Téléphone</th>
                <th>Email</th>
            </tr>
            <tr>
                <td id="companyContactName">Dwight Schrute</td>
                <td id="companyContactPhone">555-9859</td>
                <td id="companyContactEmail">dwight.schrute@ddfmfl.com</td>
            </tr>
            <tr>
                <td id="companyContactName">Dwight Schrute</td>
                <td id="companyContactPhone">555-9859</td>
                <td id="companyContactEmail">dwight.schrute@ddfmfl.com</td>
            </tr>
            <tr>
                <td id="companyContactName">Dwight Schrute</td>
                <td id="companyContactPhone">555-9859</td>
                <td id="companyContactEmail">dwight.schrute@ddfmfl.com</td>
            </tr>
        </table>
    </div>
    <div class="tableContainer">
        <h3>Factures</h3>
        <table class="tableItem">
            <tr>
                <th>Numéro de facture</th>
                <th>Date</th>
                <th>Personne de contact</th>
            </tr>
            <tr>
                <td id="companyInvoiceNbr">123456789</td>
                <td id="companyInvoiceDate">18/05/2022</td>
                <td id="companyInvoiceContact">Dwight Schrute</td>
            </tr>
            <tr>
                <td id="companyInvoiceNbr">123456789</td>
                <td id="companyInvoiceDate">18/05/2022</td>
                <td id="companyInvoiceContact">Dwight Schrute</td>
            </tr>
            <tr>
                <td id="companyInvoiceNbr">123456789</td>
                <td id="companyInvoiceDate">18/05/2022</td>
                <td id="companyInvoiceContact">Dwight Schrute</td>
            </tr>
        </table>
    </div>
    <div class="backBtn">
        <button><a href="/companies">Retour</a></button>
    </div>
</div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire