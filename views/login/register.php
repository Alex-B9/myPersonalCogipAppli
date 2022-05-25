<?php

$resetCss = "public/styles/reset/reset.css";
$pageCSS = 'public/styles/pages/register/register.css';
$pageTitle = 'Register page';
ob_start();
?>
<?php require "views/components/navigation.php"; ?>
<div class=register-titre>
    <h1>S'enregister</h1>
    <p class="soustitre-register">Remplissez attentivement le formulaire</p>
</div>
<div class="container-form-pos">
<div class=container-form>
    <div class="container-left">
        <img class="img-register" src="../../public/assets/img/register.png" alt="register image">
    </div>
    <div class="container-right">
    <form method="post" action="/register-new">
        <div class="field">
            <label class="label">Firstname</label>
            <input class="input" type="text" name="registerFirstname" placeholder="Enter your firstname" required aria-required=true aria-label="Enter your firstname">
        </div>

        <div class="field">
            <label class="label">Lastname</label>
            <input class="input" type="text" name="registerLastname" placeholder="Enter your lastname" required aria-required=true aria-label="Enter your lastname">
<!--            --><?//=(isset(errmess)) ? $errmess  ?>
        </div>

        <div class="field">
            <label class="label">Adresse e-mail</label>
            <input class="input" type="email" name="registerEmail" placeholder="Enter your email" required aria-required=true aria-label="Enter your email">
        </div>


        <div class="field">
            <label class="label">Mot de passe</label>
            <input class="input" type="password" name="registerPassword" placeholder="Enter your password" required aria-required=true aria-label="Enter your password">
        </div>


        <div class="control">
            <button type="submit" name="submitRegister" class="button is-link" aria-required=true aria-label="Submit">SUBMIT</button>
        </div>

    </form>
</div>
</div>
<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";
