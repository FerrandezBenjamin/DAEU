<?php
include('../connexion/link.php'); // Connexion à la base de données
include('../fonctions/fonction.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Si vous avez le temps. 
    // 1. Vérifier que tous les champs obligatoires ne soient pas vide.
    // 2. Sécurisation des données (enlever les espaces etc).
    // 3. Faire requete préparée
    // 4. Executer la requete préparer avec :$connect->prepare($sql);
    // 5. Redirection vers index.php avec un message de modification
}

?>
