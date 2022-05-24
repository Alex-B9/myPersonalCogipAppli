<?php

use App\models\crud\ReadModel;

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
        <form action="/invoice-store" method="post" class="addForm">
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
                <select name="invoiceCompany" id="invoiceCompany">
                    <?php $getData = new ReadModel();

                    foreach ($getData->getAllCompany() as $item) { ?>
                        <option value=<?= $item['CompaniesId'] ?>><?= $item['company_name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="formItem">
                <label for="invoiceContact">Personne de contact</label>
                <select name="invoiceContact" id="invoiceContact">
                    <?php foreach ($getData->getAllPeople() as $item) { ?>
                        <option value=<?= $item['Id_People'] ?>><?= $item['firstname'] . " " . $item['lastname'] ?></option>
                    <?php } ?>
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