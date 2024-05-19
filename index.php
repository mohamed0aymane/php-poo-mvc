<?php
session_start();
include("Controllers/faculteController.php");

$titles = [
    "index" => "Accueil",
    "etudiant" => "Liste des étudiants",
    "filiere" => "Liste des filières",
    "departement" => "Liste des départements",
    "login" => "Login"
];

$action = isset($_GET["action"]) ? $_GET["action"] : "login";
$title = isset($titles[$action]) ? $titles[$action] : "Accueil";

change_views($title, $action);
?>
