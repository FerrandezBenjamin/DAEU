<?php
include('../connexion/link.php');
include('../fonctions/fonction.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
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
        <h2>Ajouter un article</h2>

        <form action="article_add.php" method="POST" class="form-inscription">

            <div>
                <label for="article_description">Description :</label>
                <input type="text" name="article_description" id="article_description" required>
            </div>

            <div>
                <label for="article_prix">Prix (€) :</label>
                <input type="number" name="article_prix" id="article_prix" min="0" required>
            </div>

            <input type="submit" value="Ajouter l'article" class="btn-send">
        </form>
    </div>
</div>

</body>
</html>