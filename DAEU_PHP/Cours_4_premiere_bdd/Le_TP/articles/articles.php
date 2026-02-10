<?php
// Connexion BDD et fonctions
include('../connexion/link.php');
include('../fonctions/fonction.php');

// Récupération des articles a faire ici

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .search-box {
        width: 300px;
        margin: 15px 0;
        padding: 8px;
        font-size: 1rem;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .col-description { width: 60%; }
    .col-prix        { width: 90px; text-align: center; }
</style>
</head>
<body class="fond">

<div class="global">

    <div class="nav">
        <div>
            <a href="../index.php" class="btn">Accueil</a>
        </div>
        <div>
            <a href="articles_formulaire.php" class="btn">Ajouter un article</a>
        </div>
    </div>

    <div class="container_principal">
        <div class="container">
            <div class="title">
    <h1>Liste des articles</h1>
</div>

<input type="text" class="search-box" placeholder="Rechercher un article..." onkeyup="filterArticles()">

            <div class="table-container">
                <table>
                    <colgroup>
                        <col class="col-id">
                        <col class="col-description">
                        <col class="col-prix">
                        <col class="col-modifier">
                        <col class="col-supprimer">
                    </colgroup>

                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Description</th>
                            <th>Prix (€)</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            //
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>
