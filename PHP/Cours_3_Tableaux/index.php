<?php

//Permet de sauter une ligne
function sauteUneLigne()
{
    echo "<br>";
}

// Tableau indexé
echo "<b>TABLEAU INDEXE :</b> <br>";

    $fruits = ["Pomme", "Banane", "Cerise"];
    echo $fruits[0]; // Resultat = "Pomme";
    sauteUneLigne();

    echo $fruits[2]; // Resultat = "Cerise";
    sauteUneLigne();

    $fruits[] = "Mangue"; // ajoute "Mangue à la fin du tableau
    sauteUneLigne();

// -------------------------------------------

//Tableau associatif
echo "<b>TABLEAU ASSOCIATIF :</b> <br>";

    $personne = [
        "nom" => "Dupont",
        "prenom" => "Maxime",
        "age" => 36
    ];
    echo $personne["nom"]; // Resultat = "Dupont"
    sauteUneLigne();

    echo $personne["age"]; // Resultat = 36
    sauteUneLigne();

    $personne["pays"] = "France"; // Ajoute une clé "pays"
    sauteUneLigne();

// -------------------------------------------

//Tableau multidimensionnel
echo "<b>TABLEAU MULTIDIMENSIONNEL :</b> <br>";
    $etudiants = [
        ["nom" => "Alice", "age" => 25],
        ["nom" => "Bob", "age" => 22]
    ];

    echo $etudiants[0]["nom"]; // Resultat : "Alice"
    sauteUneLigne();

    echo $etudiants[1]["age"]; // Resultat : 22
    sauteUneLigne();

    $personne["age"] = 26;
    sauteUneLigne();

// -------------------------------------------
// -------------------------------------------



 /**
  * ************************
  * PARCOURS DES TABLEAUX :
  * ************************
  */

  
// Boucle for :
    echo "<br> <b>BOUCLE FOR :</b> <br>";
    for($i=0; $i<count($fruits);$i++)
    {
        // echo $fruits[$i];
        echo $fruits[$i];
        sauteUneLigne();
    }

    
// boucle foreach :
    echo " <br> <b>BOUCLE FOREACH :</b> <br>";
    foreach($fruits as $fruit)
    {
        echo $fruit;
        sauteUneLigne();
    }
    
// boucle While
    echo " <br> <b>BOUCLE WHILE :</b> <br>";
    $i=0;
    while ($i < count($fruits)) {
        echo $fruits[$i];
        $i++;

        sauteUneLigne();
    }


/**************************/
/**************************/

?>