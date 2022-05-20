<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/new/new.css';
$pageTitle = 'Ajouter une société'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="titleContainer">
    <h1>Ajout</h1>
    <h2>Nouvelle société</h2>
</div>
<div class="addContainer">
    <div class="addImg"><img src="../../public/assets/img/leader.png" alt=""></div>
    <form action="" class="addForm">
        <div class="formItem">
            <label for="companyName">Nom de la société</label>
            <input type="text" id="companyName" name="companyName">
        </div>
        <div class="formItem">
            <label for="companyTVA">Numéro de TVA</label>
            <input type="text" id="companyTVA" name="companyTVA">
        </div>
        <div class="formItem">
            <label for="companyPhone">Numéro de téléphone</label>
            <input type="tel" id="companyPhone" name="companyPhone">
        </div>
        <div class="formItem">
                <label for="companyType">Type de société</label>
                <select name="companyType" id="companyType">
                    <option>Type 1</option>
                    <option>Type 2</option>
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
