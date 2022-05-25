<?php

use App\models\crud\ReadModel;

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Factures';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

    <div class="bg-color">
    <div class="container">
        <div class="container-header">
            <div class="titleContainer">
                <div>
                    <h1>COGIP</h1>
                    <p class="subtitle">Liste des factures</p>
                </div>
                <div class="add">
                    <a href="/invoice-new">
                        <img src="./public/assets/img/add-1.png"> Nouvelle facture</a>
                </div>
            </div>
            <div class="container-img">
                <img class="img-facture" src="../public/assets/img/sales-team.png" alt="image company">
            </div>
        </div>
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