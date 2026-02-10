<?php
include('../connexion/link.php');
include('../fonctions/fonction.php');


if (!empty($_GET['id'])) {

    //

} else {
    dd('Manque un parametre id');
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un article</title>
    <link rel="stylesheet" href="../style/style.css">
</head>
<body class="fond">


<div class="global">
    <div class="nav">
        <div>
            <a href="../index.php" class="btn">Accueil</a>
        </div>
        <div>
            <a href="articles.php" class="btn">Voir les articles</a>
        </div>
    </div>


    <div class="container_principal center">
        <h2>Modification d'un article</h2>


        <form action="article_modifier.php" method="POST" class="form-inscription">

            <input type="hidden" name="article_id" value="<?= $article['article_id'] ?>">

            <div>
                <label for="article_description">Description :</label>
                <input type="text" name="article_description" id="article_description" value="" required>
            </div>

            <div>
                <label for="article_prix">Prix (€) :</label>
                <input type="number" name="article_prix" id="article_prix" value="" required>
            </div>

            <input type="submit" value="Mettre à jour" class="btn-send">
        </form>
    </div>
    </div>
</body>
</html>