<?php

include('../connexion/link.php'); // Inclusion de la connexion
include('../fonctions/fonction.php');

if(!empty($_GET['id']) && $_GET['id'] !== null)
{


    // Faite votre requête SQL ici afin de chercher tous les groupes :
    $sqlGroupe = null;
    // Exemple pour l'execution : 
    // $result = $connect->query($sqlGroupe)->fetch();

    // Ensuite : 
    // Faite votre requête SQL ici afin de chercher l'étudiant correspondant à son ID

    if(empty($result))
    {
        echo 'Erreur. Aucun étudiant trouvé !';
        die;
    }
}


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un étudiant</title>
    <link rel="stylesheet" href="../style/style.css"> <!-- Ajoutez ici votre fichier CSS si besoin -->
</head>
<body class="fond">


<div class="global">
    <div class="nav">
        <div>
            <a href="../index.php" class="btn">Accueil</a>
        </div>
        <div>
            <a href="etudiants.php" class="btn">Voir les etudiants</a>
            <a href="#" class="btn">Voir les articles</a>
        </div>
    </div>

    <div class="container_principal center">
        <h2>Modification d'un étudiant</h2>

        <!-- A faire ??? -->
            
        <input type="submit" value="Mettre à jour" class="btn-send">
        </form>
    </div>

</div>
</body>
</html>
