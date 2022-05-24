<?php

use App\models\crud\ReadModel;

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Factures';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

    <div class="titleContainer">
        <h1>COGIP</h1>
        <h2>Liste des factures</h2>
    </div>

    <div class="add">
        <a href="/invoice-new"><img src="./public/assets/img/document-1.png"> Nouvelle Facture</a>
    </div>

    <div class="tableContainer">
        <table class="tableItem">
            <thead>
            <tr>
                <th>NUMERO DE FACTURE</th>
                <th>DATES</th>
                <th>SOCIETE</th>
                <th>TYPE</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php $getInvoice = new ReadModel();

            foreach ($getInvoice->getAllInvoices() as $item) { ?>
                <tr>
                    <td id="invoiceNbr"><?= $item['number_invoice'] ?></td>
                    <td id="invoiceDate"><?= $item['date'] ?></td>
                    <td id="invoiceCompany"><?= $item['company_name'] ?></td>
                    <td id="invoiceCompanyType"><?= $item['Type'] ?></td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";