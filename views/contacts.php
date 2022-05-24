<?php

use App\models\crud\ReadModel;

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

    <div class="add">
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
                <?php $getPeople = new ReadModel();

                foreach ($getPeople->getAllPeople() as $item) { ?>
                    <tr>
                        <td id="contactName"><?= $item['lastname'] . $item['firstname'] ?></td>
                        <td id="contactPhone"><?= $item['Phone'] ?></td>
                        <td id="contactEmail"><?= $item['email'] ?></td>
                        <td id="contactCompany">Raviga</td>
                        <td><img src="./public/assets/img/delete-2.png"></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php

$pageContent = ob_get_clean();
require "layouts/layout.php";