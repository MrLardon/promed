<?php
include "getRacine.php";

include CONTROL_DIR . "controleurPrincipal.php";
include_once MODELE_DIR . "authentification.inc.php"; // pour pouvoir utiliser isLoggedOn()
include_once VUE_DIR . "vueAuthentification.html.php";
if (isset($_GET["action"])) {
    $action = $_GET["action"];
} else {
    $action = "defaut";
}

$fichier = controleurPrincipal($action);

//die( CONTROL_DIR . $fichier );

include CONTROL_DIR . "$fichier";
