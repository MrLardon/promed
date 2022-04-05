<?php

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["defaut"] = "edit_patient.html.php";
    $lesActions["inscription"] = "edit_patient.html.php";
    $lesActions["comptepro"] = "monProfilPraticien.php";
    //$lesActions["recherche"] = "priserdv.php";
    $lesActions["connexion"] = "connexion.php";
    //$lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "edit_patient.html.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
