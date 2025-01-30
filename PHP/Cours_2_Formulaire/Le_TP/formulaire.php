<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier Formulaire en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>


<?php

function concatePrenomNom($param1, $param2)
{
    return $param1 . " " .$param2;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = filter_var($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($message)) {
        echo "<h2>Bonjour " .concatePrenomNom($prenom, $nom) ."</h2>.<br>";
        echo "<p>Merci pour votre inscription.</p><br>";
        echo "<p><strong>L'Email reçu :</strong> $email</p>";
        echo "<p><strong>Le message reçu :</strong> $message</p>";
    } else {
        echo "<p>Veuillez remplir tous les champs.</p>";
    }
} else {
    echo "<p>Accès non autorisé.</p>";
}

?>
