<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
    <link rel="stylesheet" href="style/style.css">
    <style>
        .server-message {
            font-size: 1.5rem;
            font-weight: bold;
            padding: 15px 25px;
            margin: 15px 0;
            border-radius: 8px;
            text-align: center;
        }
        .success { background-color: #e6ffed; color: #1e7e34; border: 2px solid #28a745; }
        .warning { background-color: #fff3cd; color: #856404; border: 2px solid #ffc107; }
        .danger  { background-color: #f8d7da; color: #721c24; border: 2px solid #dc3545; }
    </style>
</head>
<body class="fond">
    <div class="global">
        <div class="nav">
            <div>
                <a href="index.php" class="btn">Accueil</a>
            </div>
            <div>
                <a href="etudiants/etudiants.php" class="btn">Voir les etudiants</a>
                <a href="articles/articles.php" class="btn">Voir les articles</a>
            </div>
        </div>

        <div class="container_principal">
            <div class="accueil center flex-column">

                <?php
                    // Gérer ici les messages reçu par un get
                ?>

                <h1 class="bvn">Bienvenue</h1>

            </div>
        </div>
    </div>
</body>
</html>