<?php
include_once "bd.inc.php";


$sets =[
    "nom" => $_POST["nom"],
    "prenom" => $_POST["prenom"],
    "rue" => $_POST["rue"],
    "date_naissance" => $_POST['date_naissance'],
    "mail" => $_POST["mail"],
    "telephone" => $_POST["telephone"],
    "num_secu" => $_POST["num_secu"],
    "num_rue" => $_POST["num_rue"],
    "code_postal" => $_POST["code_postal"],
    "ville" => $_POST["ville"],
    "password" => $_POST["password"],
    "nvx_client" => '1',

];

try {
    $inst = new PDO("mysql:host=$serveur;port=$port;dbname=$bd", $login, $mdp,);
    $inst->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $req ="INSERT INTO patient (*) VALUES($sets)";
    $inst ->exec($req);

} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}