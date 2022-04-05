<?php
include VUE_DIR . "edit_patient.html.php";



    // traitement du formulaire
if (!empty($_POST)) {
    $champsObligatoires = ["nom"];
    foreach ($champsObligatoires as $champ) {
        if (!isser($_POST[$champ]) ||$_POST[$champ] ==="") {
            $champsObligatoires->error(txt("Veuillez vérifier les champs obligatoires"));
            break;
        }
    }


    $sets =[
        "nom" => $_POST["nom"],
        "prenom" => $_POST["prenom"],
        "date_naissance" => $_POST["date_naissance"],
        "rue" => $_POST["rue"],
        "mail" => $_POST["mail"],
        "telephone" => $_POST["telephone"],
        "num_secu" => $_POST["num_secu"],
        "num_rue" => $_POST["num_rue"],
        "code_postal" => $_POST["code_postal"],
        "ville" => $_POST["ville"],
        "password" => $_POST["password"],
        //nvx_client ?
    ];

}