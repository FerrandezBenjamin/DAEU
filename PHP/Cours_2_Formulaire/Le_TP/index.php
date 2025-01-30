<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier Formulaire en PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Formulaire de contact</h2>
    <form action="formulaire.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        <br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <br><br>
        
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br><br>
        
        <label for="message">Message :</label>
        <textarea id="message" name="message" required></textarea>
        <br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>