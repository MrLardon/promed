<?php

function controleurPrincipal($action)
{
    $lesActions = array();
    $lesActions["defaut"] = "patient/edit_patient.php";
    $lesActions["inscription"] = "vue/edit_patient.html.php";
    $lesActions["comptepro"] = "vue/edit_praticien.html.php";
    //$lesActions["recherche"] = "priserdv.php";
    $lesActions["connexion"] = "connexion.php";
    //$lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["profil"] = "vue/edit_patient.html.php";

    if (array_key_exists($action, $lesActions)) {
        return $lesActions[$action];
    } else {
        return $lesActions["defaut"];
    }
}
