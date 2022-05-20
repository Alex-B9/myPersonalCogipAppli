<?php
$resetCss = './../public/styles/reset/reset.css';
$pageCSS = './../public/styles/pages/error/error.css';
$pageTitle = 'Oups...'; // obligatoire
ob_start(); // obligatoire

require "views/components/navigation.php";

?>

<div class="errorContainer">
    <div class="imgContainer">
        <img src="../../public/assets/img/error.png" alt="">
    </div>
    <div class="errorInfo">
        <div class="titleContainer">
            <h1>Oups !</h1>
            <h2>La page que vous cherchez semble introuvable...</h2>
        </div>
        <div class="errorCode">
            <p>Code erreur : 404</p>
        </div>
        <div class="backBtn">
            <button><a href="/">Retourner à la page d'accueil</a></button>
        </div>
    </div>
</div>


<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";