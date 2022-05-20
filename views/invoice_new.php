<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/new/new.css';
$pageTitle = 'Ajouter une facture'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Ajout</h1>
    <h2>Nouvelle facture</h2>
</div>
<div class="addContainer">
    <div class="addImg"><img src="../../public/assets/img/sales-team.png" alt=""></div>
    <form action="" class="addForm">
        <div class="formItem">
            <label for="invoiceNumber">Numéro de facture</label>
            <input type="text" id="invoiceNumber" name="invoiceNumber">
        </div>
        <div class="formItem">
            <label for="invoiceDate">Date</label>
            <input type="date" id="invoiceDate" name="invoiceDate">
        </div>
        <div class="formItem">
            <label for="invoiceCompany">Société</label>
            <input type="text" id="invoiceCompany" name="invoiceCompany">
        </div>
        <div class="formItem">
                <label for="invoiceContact">Personne de contact</label>
                <select name="invoiceContact" id="invoiceContact">
                    <option>Personne 1</option>
                    <option>Personne 2</option>
                    <option>Personne 3</option>
                </select>
        </div>
        <div class="formItem">
                <button type="submit" value="submit">Ajouter</button>
        </div>
    </form>
</div>

<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire