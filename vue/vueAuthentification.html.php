<?php

$titre = "Login";
include "entete.html.php";
include "pied.html.php";
include "../modele/authentification.inc.php"
?>
<!DOCTYPE html>

<head>

    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>


<form action="" method="post">
<div>

    <h2>Connexion à votre compte Promed : </h2>
</div>

<div style="display: flex ; flex-direction: column " class="form-control">
    <div style="display: flex ; flex-direction: column" class="form-control">
        <div class="form-control">
            Login<input type="text" name='email' placeholder="Email" required danger="*">
        </div>

    </div class="form-control">
    <div style="display: flex ; flex-direction: column  " class="form-control">
        <div class="form-control">
            Mot de passe <input type="password" name="password" placeholder="Mot de passe" required>
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
