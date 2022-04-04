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

if (isset($_POST)){

 $insert=PDO::prepare("INSERT INTO patient .'$sets'.");
 $insert->execute($sets);
 foreach ($insert as $row) {
     print_r($row);
 }
}