<?php

use App\models\crud\ReadModel;

$pageCSS = './../public/styles/pages/home/home.css';
$pageTitle = 'Home page'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";


?>


    <div class="bg-color">
    <div class='container'>
        <div class="container-header">
            <div class="container-tilte">
                <h1 class="title-welcome">Bienvenue</h1>
                <h1>à la COGIP</h1>
                <h2>Bonjour Jean-Christian !
                    </br> Que souhaitez-vous faire aujourd’hui ?</h2>
            </div>
            <img class="img-title" src="../public/assets/img/digital-nomad.png" alt="">
        </div>


        <div class="button-container">
            <div class="touti">
                <a href="./invoice-new"><img class="img-title" src="../public/assets/img/document-1.png"
                                             alt="button"></a>
                <a href="./invoice-new">Nouvelle Facture</a>
            </div>
            <div class="touti">
                <a href="./company-new"><img class="img-title" src="../public/assets/img/add-house-1.png"
                                             alt="button"></a>
                <a href="./company-new">Nouvelle Société</a>
            </div>
            <div class="touti">
                <a href="./contact-new"><img class="img-title" src="../public/assets/img/user.png" alt="button"></a>
                <a href="./contact-new">Nouveau Contact</a>
            </div>


        </div>


        <div class='container-table'>
            <div class="all-table">
                <div class="titre-table">
                    <p>Dernière facture :</p>
                </div>

                <table class="table">
                    <thead>
                    <th>Numéro facture</th>
                    <th>Date</th>
                    <th>Société</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <?php $getData = new ReadModel();

                    foreach ($getData->getAllInvoices() as $item) { ?>
                        <tr>
                            <td class="facture-style"><?= $item['number_invoice'] ?></td>
                            <td><?= $item['date'] ?></td>
                            <td><?= $item['company_name'] ?></td>
                            <td>
                                <a href="#">
                                    <img src="../public/assets/img/delete-2.png" alt="delete">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <div>
                </table>

                <div class="titre-table">
                    <p>Dernier contacts :</p>
                </div>
                <table class="table">
                    <thead>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>e-mail</th>
                    <th>société</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <?php

                    foreach ($getData->getInnerJoinCompanyPeople() as $item) { ?>
                        <tr>
                            <td class="facture-style"><?= $item['lastname'] . " " . $item['firstname'] ?></td>
                            <td><?= $item['Phone'] ?></td>
                            <td><?= $item['email'] ?></td>
                            <td><?= $item['company_name'] ?></td>
                            <td>
                                <a href="#">
                                    <img src="../public/assets/img/delete-2.png" alt="delete">
                                </a>
                            </td>


                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <div class="titre-table">
                    <p>Dernières Société :</p>
                </div>
                <table class="table">
                    <thead>
                    <th>Nom</th>
                    <th>TVA</th>
                    <th>Pays</th>
                    <th>type</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <?php

                    foreach ($getData->getInnerJoinCompanyType() as $item) { ?>
                        <tr>
                            <td class="facture-style"><?= $item['company_name'] ?></td>
                            <td><?= $item['vat_number'] ?></td>
                            <td><?= $item['country'] ?></td>
                            <td><?= $item['Type'] ?></td>
                            <td>
                                <a href="#">
                                    <img src="../public/assets/img/delete-2.png" alt="delete">
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire