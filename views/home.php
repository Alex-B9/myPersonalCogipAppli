<?php
$pageCSS = './../public/styles/pages/home/home.css';
$pageTitle = 'Home page'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";


?>

    <div class='container'>
        <h1>Bienvenue à la COGIP</h1>
        <h2>Bonjour Jean-Christian !
            Que souhaitez-vous faire aujourd’hui ?</h2>

        <div class="button-container">
            <div class="touti">
                <a href="/invoice-new"><img class="img-title" src="../public/assets/img/document-1.png" alt="button"></a>
                <a href="/invoice-new">Nouvelle Facture</a>
            </div>
            <div class="touti">
                <a href="/company-new"><img class="img-title" src="../public/assets/img/add-house-1.png" alt="button"></a>
                <a href="/company-new">Nouvelle Société</a>
            </div>
            <div class="touti">
                <a href="/contact-new"><img class="img-title" src="../public/assets/img/user.png" alt="button"></a>
                <a href="/contact-new">Nouveau Contact</a>
            </div>


        </div>


        <div class='container-table'>
            <div class="all-table">
                <div class="titre-table">
                    <p>Dernières factures :</p>
                </div>
                <div>
                    <table class="table">
                        <thead>
                        <th>Numéro facture</th>
                        <th>Date</th>
                        <th>Société</th>
                        <th></th>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="facture-style">OFKZSODJOS1</td>
                            <td>00/00/01</td>
                            <td>societé1</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS2</td>
                            <td>00/00/02</td>
                            <td>societé2</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS3</td>
                            <td>00/00/03</td>
                            <td>societé3</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS4</td>
                            <td>00/00/04</td>
                            <td>societé4</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        <tr>
                            <td class="facture-style">OFKZSODJOS5</td>
                            <td>00/00/05</td>
                            <td>societé5</td>
                            <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class='container-table'>
                <p class="titre-table">Dernières société :</p>
                <table class="table">
                    <thead>
                    <th>Numéro facture</th>
                    <th>Date</th>
                    <th>Société</th>
                    <th></th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="facture-style">OFKZSODJOS1</td>
                        <td>00/00/01</td>
                        <td>societé1</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS2</td>
                        <td>00/00/02</td>
                        <td>societé2</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS3</td>
                        <td>00/00/03</td>
                        <td>societé3</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS4</td>
                        <td>00/00/04</td>
                        <td>societé4</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    <tr>
                        <td class="facture-style">OFKZSODJOS5</td>
                        <td>00/00/05</td>
                        <td>societé5</td>
                        <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <p class="titre-table">Dernier contact :</p>
            <table class="table">
                <thead>
                <th>Numéro facture</th>
                <th>Date</th>
                <th>Société</th>
                <th></th>
                </thead>
                <tbody>
                <tr>
                    <td class="facture-style">OFKZSODJOS1</td>
                    <td>00/00/01</td>
                    <td>societé1</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS2</td>
                    <td>00/00/02</td>
                    <td>societé2</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS3</td>
                    <td>00/00/03</td>
                    <td>societé3</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS4</td>
                    <td>00/00/04</td>
                    <td>societé4</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                <tr>
                    <td class="facture-style">OFKZSODJOS5</td>
                    <td>00/00/05</td>
                    <td>societé5</td>
                    <td><img src="../public/assets/img/delete-2.png" alt="delete"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php

$pageContent = ob_get_clean(); // obligatoire
require "layouts/layout.php"; // obligatoire