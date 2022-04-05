<?php
include  VUE_DIR. "/edit_patient.html.php";



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
        "nvx_client" =>$_POST["nvx_client"],
        //nvx_client ?
    ];

$login = 'dev';
$mdp = 'SuperUser@sio56';
$bd = 'gr1';
$serveur = '172.16.120.2';
$port = "3307";

try {
    $inst = new PDO("mysql:host=$serveur;port=$port;dbname=$bd", $login, $mdp,);
    $inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req ="INSERT INTO patient (*) VALUES($sets)";
    $inst ->exec($req);

} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
