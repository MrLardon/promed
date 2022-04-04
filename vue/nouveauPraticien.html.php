<?php

$titre = "Nouveau praticien";
include "entete.html.php";
include "pied.html.php";

?>
<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="/css/style.css">

</head>

<body>


<form action="" method="post"></form>
<div>

    <h2>Nouveau Praticien : </h2>
</div>

<div style="display: flex ; flex-direction: row" class="form-control">
    <div style="display: flex ; flex-direction: column" class="form-control">
        <div class="form-control"><input type="text" name='nom' placeholder="Nom" required danger="*">Nom</input>
        </div>
    <div class="form-control"><input type="text" name="prenom" placeholder="Prénom" required>Prénom</input>
        </div>
        <div class="form-control">
            <input type="text" name="specialite" placeholder="Spécialité" required>Spécialité</input>
        </div>
        <div class="form-control">
            <input type="int" name="num_rpps" placeholder="Numéro rpps" required>Numéro RPPS</input>
        </div>
        <div class="form-control">
            <input type="mail" name="mail" placeholder="Email" required>Adresse mail</input>
        </div>
        <div>
            <input type="text" name="password" required placeholder="Mot de passe">Mot de passe</input>
        </div>
    </div class="form-control">
    <div style="display: flex ; flex-direction: column  " class="form-control">
        <div class="form-control">
            <input type="text" name="ville" placeholder="Ville" required>Ville</input>
        </div>
        <div class="form-control">
            <input type="text" name="num_rue" placeholder="Numéro de rue" required>Numéro de rue</input>
        </div>
        <div class="form-control">
            <input type="text" name="rue" placeholder="Rue" required>Rue</input>
        </div>
        <div class="form-control">
            <input type="int" name="code_postal" placeholder="Code postal" required>Code postal</input>
        </div>
        <div>
            <select name="tele_consult">
                <option type="checkbox" value="0">Non</option>
            <option type="checkbox" value="1">Oui</option>
            </select>
        </div>

    </div>
    <div>
        <input type="submit" name="submit"> Valider</input>
    </div>
</div>
</form>
<?php
var_dump($_POST);
?>
</body>
</html>