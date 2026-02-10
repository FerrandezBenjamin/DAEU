<?php
include('../connexion/link.php'); // Connexion à la base de données

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

   
} else {
    header('Location: articles.php');
    exit();
}
?>