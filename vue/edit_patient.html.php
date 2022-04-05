<?php

$titre = "Nouveau patient";
include "entete.html.php";
include MODELE_DIR."edit_patient.inc.php";
include "pied.html.php";
include CONTROL_PATIENT."edit_patient.php";
?>
<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>
<form action="" method="post"></form>
<div>

    <h2>Nouveau Patient : </h2>
</div>

<div style="display: flex ; flex-direction: row" class="form-control">
    <div style="display: flex ; flex-direction: column" class="form-control">
        <div class="form-control"><input type="text" name='nom' placeholder="Nom" required danger="*"/>
        </div>
        <div class="form-control"><input type="text" name="prenom" placeholder="Prénom" required/>
        </div>
        <div class="form-control">
            <input type="date" name="date_naissance" placeholder="Date de naissance" required/>
        </div>
        <div class="form-control">
            <input type="int" name="num_secu" placeholder="Numéro de sécurité sociale" required/>
        </div>
        <div class="form-control">
            <input type="mail" name="mail" placeholder="Email" required/>
        </div>
        <div>
            <input type="text" name="password" required placeholder="Mot de passe" />
        </div>
    </div class="form-control">
    <div style="display: flex ; flex-direction: column  " class="form-control">
        <div class="form-control">
            <input type="text" name="ville" placeholder="Ville" required/>
        </div>
        <div class="form-control">
            <input type="text" name="num_rue" placeholder="Numéro de rue" required>
        </div>
        <div class="form-control">
            <input type="text" name="rue" placeholder="Rue" required/>
        </div>
        <div class="form-control">
            <input type="text" name="ville" placeholder="Ville" required/>
        </div>
        <div class="form-control">
            <input type="int" name="code_postal" placeholder="Code postal" required/>
        </div>


    </div>
    <div>
        <button type="submit" name="submit"> Valider</button>
    </div>
</div>
</form>


</body>
</html>
