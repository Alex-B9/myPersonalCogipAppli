<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/details/details.css';
$pageTitle = 'Détails de la facture'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Facture</h1>
    <h2 id="invoiceNbr">F123456-789</h2>
</div>
<div class="detailsContainer">
    <div class="info">
        <p>Date : <span id="invoiceDate">19/05/2022</span></p>
    </div>
    <div class="tableContainer">
        <h3>Société liée à la facture</h3>
        <table class="tableItem">
            <tr>
                <th>Nom de la société</th>
                <th>Numéro de TVA</th>
                <th>Type de société</th>
            </tr>
            <tr>
                <td id="invoiceCompanyName">Jouets Jean-Michel</td>
                <td id="invoiceCompanyVAT">123456789</td>
                <td id="invoiceCompanyType">Fournisseur</td>
            </tr>
        </table>
    </div>
    <div class="tableContainer">
        <h3>Personne de contact</h3>
        <table class="tableItem">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
            <tr>
                <td id="invoiceContactName">Dwight Schrute</td>
                <td id="invoiceContactPhone">555-9859</td>
                <td id="invoiceContactEmail">dwight.schrute@ddfmfl.com</td>
            </tr>
        </table>
    </div>
    <div class="backBtn">
        <button><a href="/invoices">Retour</a></button>
    </div>
</div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire