<?php


//edition
 /*if (!is_null($praticienId)) {
    $result = PDO::doSelect("praticien", ["id" => $praticienId]);
    if (!$praticien = $result->fetch()) {
        exit();
    }

} */
    // traitement du formulaire
if (!empty($_POST)) {
    $champsObligatoires = ["nom"];
    foreach ($champsObligatoires as $champ) {
        if (!isser($_POST[$champ]) ||$_POST[$champ] ==="") {
            $_SESSION->error(txt("Veuillez vérifier les champs obligatoires"));
            break;
        }
    }

    $sets =[
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "rue" => $_POST["rue"],
        "mail" => $_POST["mail"],
        "telephone" => $_POST["telephone"],
        "num_rpps" => $_POST["num_rpps"],
        "num_rue" => $_POST["num_rue"],
        "code_postal" => $_POST["code_postal"],
        "ville" => $_POST["ville"],
        "tele_consult" => $_POST["tele_consult"],
        "password" => $_POST["password"],

    ];
getpdo();
    $insert=$db->prepare("INSERT INTO praticien .'$sets'.");
    $insert->execute();
    $result = $insert->fetchAll();

}