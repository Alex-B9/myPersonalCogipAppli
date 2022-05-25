<?php

use App\models\crud\ReadModel;

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Sociétés';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>


    <div class="bg-color">
        <div class="container">
            <div class="container-header">
                <div class="titleContainer">
                    <div>
                        <h1>COGIP</h1>
                        <p class="subtitle">Liste des sociétés</p>
                    </div>
                    <div class="add">
                        <a href="/company-new">
                            <img src="./public/assets/img/add-1.png"> Nouvelle société</a>
                    </div>
                </div>
                <div class="container-img">
                    <img class="img-companie" src="../public/assets/img/leader.png" alt="image company">
                </div>

            </div>
        </div>


        <div class="tableContainer">
            <h3>Clients</h3>
            <div class="tableItem">
                <table>
                    <thead>
                    <tr>
                        <th>NOM</th>
                        <th>TVA</th>
                        <th>PAYS</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $getClientCompany = new ReadModel();
                    foreach ($getClientCompany->getCompanyByIdType(1) as $item) { ?>
                        <tr>
                            <td><?= $item['company_name'] ?></td>
                            <td><?= $item['vat_number'] ?></td>
                            <td><?= $item['country'] ?></td>
                            <td><img src="./public/assets/img/delete-2.png"></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="tableContainer">
            <h3>Fournisseurs</h3>
            <div class="tableItem">
                <table>
                    <thead>
                    <tr>
                        <th>NOM</th>
                        <th>TVA</th>
                        <th>PAYS</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $getClientCompany = new ReadModel();
                    foreach ($getClientCompany->getCompanyByIdType(2) as $item) { ?>
                        <tr>
                            <td><?= $item['company_name'] ?></td>
                            <td><?= $item['vat_number'] ?></td>
                            <td><?= $item['country'] ?></td>
                            <td><img src="./public/assets/img/delete-2.png"></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";