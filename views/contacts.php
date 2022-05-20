<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/list/list.css';
$pageTitle = 'Contacts';
ob_start();
?>

<?php require "views/components/navigation.php"; ?>

<div class="titleContainer">
    <h1>COGIP</h1>
    <h2>Liste des contacts</h2>
</div>

<div class ="add">
    <a href="/contact-new"><img src="./public/assets/img/user.png"> Nouveau contact</a>
</div>

<div class="tableContainer">
    <div class="tableItem">
        <table>
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>TELEPHONE</th>
                    <th>E-MAIL</th>
                    <th>SOCIETE</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="contactName">Peter Gregory</td>
                    <td id="contactPhone">555-4567</td>
                    <td id="contactEmail">peter.gregory@raviga.com</td>
                    <td id="contactCompany">Raviga</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
                <tr>
                    <td id="contactName">Cameron Howe</td>
                    <td id="contactPhone">555-7896</td>
                    <td id="contactEmail">cam.howe@mutiny.net</td>
                    <td id="contactCompany">Mutiny</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
                <tr>
                    <td id="contactName">Dwight Schrute</td>
                    <td id="contactPhone">555-9859</td>
                    <td id="contactEmail">dwight.schrute@ddmfl.com</td>
                    <td id="contactCompany">Dunder Mifflin</td>
                    <td><img src="./public/assets/img/delete-2.png"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";