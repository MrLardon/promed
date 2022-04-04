<?php

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["defaut"] = "nouveauPatient.html.php";
    //$lesActions["inscription"] = "nouveauPatient.html";
    //$lesActions["comptepro"] = "monProfilPraticien.php";
    //$lesActions["recherche"] = "priserdv.php";
    //$lesActions["connexion"] = "connexion.php";
    //$lesActions["deconnexion"] = "deconnexion.php";
    //$lesActions["profil"] = "monProfilPatient.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
