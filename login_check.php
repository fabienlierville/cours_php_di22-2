<?php
require ("./inc/config.php");

//Récupère les infos user par rapport au mail
$requete = $bdd->prepare("SELECT * FROM users WHERE Email=:Email");
$requete->execute([
    "Email" => $_POST["Email"]
]);
$user = $requete->fetch(PDO::FETCH_ASSOC);

// Compare mot de passe clair / hashé en base
// Si pas ok back to login.php (Session "ErrorMessage")
session_start();
if(count($user) == 0){
    $_SESSION["ERROR"] = "Mail invalide";
    header("Location:/login.php");
}
if(!password_verify($_POST["Password"], $user["Password"])){
    $_SESSION["ERROR"] = "Password invalide";
    header("Location:/login.php");
}

// Si ok => Session "connecté"
$_SESSION["Login"] = [
    "NomPrenom" => $user["NomPrenom"],
    "Roles" => $user["Roles"],
    "UserId" => $user["Id"],
];
header("Location:/admin");