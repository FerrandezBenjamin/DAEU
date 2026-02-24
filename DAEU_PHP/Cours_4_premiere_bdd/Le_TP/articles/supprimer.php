<?php
include('../connexion/link.php');
include('../fonctions/fonction.php');

if (isset($_POST['article_id']) && !empty($_POST['article_id'])) {
    // A vous de jouer !
} else {
    header("Location: articles.php?error=1");
    exit();
}
?>