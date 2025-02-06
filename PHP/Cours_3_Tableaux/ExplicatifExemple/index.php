<?php


// Création d'une fonction qui me permettra de sauter un certain nombre de ligne
function sauteUnNombreDeLigne($nombre)
{
    for ($i=0;$i<$nombre;$i++)
    {
        echo "<br>";
    }
}

// Création d'une fonction qui me permettra de créer une ligne d'étoile
function makeSymboleByNumber($nombre)
{
    for ($i=0;$i<$nombre;$i++)
    {
        echo "***************************************";
    }
}

// Création d'une fonction qui me fait les deux !
function concatFunctionOneAndTwo($nombre1, $nombre2)
{
    makeSymboleByNumber($nombre1);
    sauteUnNombreDeLigne($nombre2);
}



/**
 * ******************************************************************************************************************************
 *  *********************************************** /!\ A LIRE ABSOLUMENT /!\****************************************************
 * Dans une fonction, par défaut, PHP fait une copie de la variable.
 * Cela signifie que toute modification que tu apportes à la variable dans la fonction n'affecte pas la variable originale en dehors de la fonction.
 * Pour palier à ça, nous mettons donc le symbole "&" avant la variable mise en paramètre.
 * 
 * 
 * Toute ses ligne de codes ne sont pas forcément optimisé. Ce fichier a vraiment pour but de vous faire comprendre l'utilisation des tableaux, fonctions et variable.
 * L'execution de beaucoup de fonction servent ici à une facilité de lecture vis-à-vis de l'affichage, elle n'apporte pas forcément quelque chose au code.
 * 
 * 
 * ******************************************************************************************************************************
 * ******************************************************************************************************************************
 */


/**
 * **************************************
 * **************************************
 *          LES TABLEAUX INDEXE
 * *************************************
 * *************************************
 */

    concatFunctionOneAndTwo(1, 1);
    echo "<b>TABLEAU INDEXE :</b> <br>";
    concatFunctionOneAndTwo(1, 1);



    $fruits = ["Pomme", "Banane", "Cerise"];
    echo $fruits[0]; // Resultat = "Pomme";
    sauteUnNombreDeLigne(1);

    echo $fruits[2]; // Resultat = "Cerise";
    sauteUnNombreDeLigne(2);
    
    echo "<b>Ajout du fruit 'Mangue' dans le tableau</b>";
    sauteUnNombreDeLigne(1);
    $fruits[] = "Mangue"; // ajoute "Mangue à la fin du tableau
    

    // Nouvelle fonctionnalité, var_dump() 
    // https://www.php.net/manual/fr/function.var-dump.php
    // Résumé : affiche la valeur, que ce soit un tableau, une liste, une variable..

    var_dump($fruits);
    sauteUnNombreDeLigne(1);



    /**
     * *************************************************
     * Exemple et explication par rapport au symbole "&"
     * *************************************************
     */

     
        /****************** SANS SYMBOLE ******************/
        /**************************************************/
        
            //----------------------------------------------
                //----------------------------------------------
                    sauteUnNombreDeLigne(1);
                    echo "<b>Utilisation function sans symbole & (ligne code 109)</b>";
                    sauteUnNombreDeLigne(1);
                //----------------------------------------------
            //----------------------------------------------


            // On créer la variable $nom qui prend la valeur "Alice"
            $nom = "Alice";
            

            // Exemple sans le symbole "&" :
            function changerNom($nom) {
                $nom = "Bob";  // Cela ne change que la copie de $nom
            }

            changerNom($nom); // Execution de la function
        
            echo $nom; // Affiche "Alice", pas "Bob"
            sauteUnNombreDeLigne(2);


        /******************* FIN SANS SYMBOLE********************/
        /********************************************************/


        /****************** AVEC SYMBOLE ******************/
        /**************************************************/

            //----------------------------------------------
                //----------------------------------------------  
                    sauteUnNombreDeLigne(1);
                    echo "<b>Utilisation function avec symbole & (ligne code 132)</b>";
                    sauteUnNombreDeLigne(1);
                //----------------------------------------------
            //----------------------------------------------


            // Exemple avec le symbole "&"
            function changerNomAvecSymbole(&$nom) {
                $nom = "Bob";  // Cela change désormais la vrai valeur de $nom
            }

            changerNomAvecSymbole($nom); //Execution de la function V2

            echo $nom;  // Affiche désormais bien "Bob", et pas alice
            sauteUnNombreDeLigne(2);

        /******************* FIN AVEC SYMBOLE********************/
        /********************************************************/


        //----------------------------------------------
            //----------------------------------------------
                concatFunctionOneAndTwo(1, 1);
                echo "<b>FIN TABLEAU INDEXE :</b> <br>";
                concatFunctionOneAndTwo(1, 5);
            //----------------------------------------------
        //----------------------------------------------


/*******************************************************/
/***************** FIN TABLEAU INDEXE ******************/
/*******************************************************/



/**
 * *************************************
 * *************************************
 *       LES TABLEAUX ASSOCIATIF
 * *************************************
 * *************************************
 */

     //----------------------------------------------
        //----------------------------------------------
            concatFunctionOneAndTwo(1, 1);
            echo "<b>TABLEAU ASSOCIATIF :</b> <br>";
            concatFunctionOneAndTwo(1, 1);
        //----------------------------------------------
    //----------------------------------------------


    // Création du tableau associatif. On associe donc une valeur a une clef :
    $personne = [
        "nom" => "Dupont",
        "prenom" => "Maxime",
        "age" => 36
    ];

  
    echo $personne["nom"]; // Resultat = "Dupont"
    sauteUnNombreDeLigne(1);

    echo $personne["age"]; // Resultat = 36
    sauteUnNombreDeLigne(2);

    echo "<b>Ajout de la clé 'pays' et lui donne la valeur 'France'</b>";

    $personne["pays"] = "France"; // Ajoute une clé "pays"
    sauteUnNombreDeLigne(1);

    var_dump($personne);
    sauteUnNombreDeLigne(1);


    //----------------------------------------------
        //----------------------------------------------
            concatFunctionOneAndTwo(1, 1);
            echo "<b>FIN TABLEAU ASSOCIATIF :</b> <br>";
            concatFunctionOneAndTwo(1, 5);
        //----------------------------------------------
    //----------------------------------------------
    

/***********************************************************/
/***************** FIN TABLEAU ASSOCIATIF ******************/
/***********************************************************/





/**
 * **************************************
 * **************************************
 *       LES TABLEAUX MULTIDIMENSIONNEL
 * *************************************
 * *************************************
 */

    //----------------------------------------------
        //----------------------------------------------
            concatFunctionOneAndTwo(1, 1);
            echo "<b>TABLEAU MULTIDIMENSIONNEL :</b> <br>";
            concatFunctionOneAndTwo(1, 1);
         //----------------------------------------------
    //----------------------------------------------

    // Création du tableau multidimensionnel. On associe une valeur a une clef :
    $etudiants = [
        ["nom" => "Alice", "age" => 25],
        ["nom" => "Bob", "age" => 22]
    ];

    echo $etudiants[0]["nom"]; // Resultat : "Alice"
     sauteUnNombreDeLigne(1);;

    echo $etudiants[1]["age"]; // Resultat : 22
     sauteUnNombreDeLigne(1);;

    $personne["age"] = 26;
     sauteUnNombreDeLigne(1);;


/******************************************************************/
/***************** FIN TABLEAU MULTIDIMENSIONNEL ******************/
/******************************************************************/



/**
 * **************************************
 * **************************************
 *          PARCOURS DES TABLEAUX
 * *************************************
 * *************************************
 */

// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------
  
    /**
     * **************************************
     * **************************************
     *              BOUCLE FOR
     * *************************************
     * *************************************
     */

        echo "<b>BOUCLE FOR :</b>";
        sauteUnNombreDeLigne(1);

        for($i=0; $i<count($fruits);$i++)
        {
            echo $fruits[$i];
             sauteUnNombreDeLigne(1);
        }

    /****************************************************/
    /***************** FIN BOUCLE FOR  ******************/
    /****************************************************/
    
// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------

    /**
     * **************************************
     * **************************************
     *              BOUCLE FOREACH
     * *************************************
     * *************************************
     */

        sauteUnNombreDeLigne(1);
        echo "<b>BOUCLE FOREACH :</b>";
        sauteUnNombreDeLigne(1);

        foreach($fruits as $fruit)
        {
            echo $fruit;
            sauteUnNombreDeLigne(1);
        }

    /*********************************************************/
    /***************** FIN BOUCLE FOREACH  *******************/
    /*********************************************************/   

// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------

    /**
     * **************************************
     * **************************************
     *              BOUCLE WHILE
     * *************************************
     * *************************************
     */

        sauteUnNombreDeLigne(1);
        echo "<b>BOUCLE WHILE :</b>";
        sauteUnNombreDeLigne(1);

        //Création de la variable $i qui va nous permettre de pouvoir sortir de la boucle while
        $i=0;

        while ($i < count($fruits)) {
            echo $fruits[$i];

            //Incrémentation de $i de 1 à chaque itération de boucle
            $i++;

             sauteUnNombreDeLigne(1);
        }

    /*********************************************************/
    /***************** FIN BOUCLE WHILE  *******************/
    /*********************************************************/   

// -----------------------------------------------------------------------------------------
// -----------------------------------------------------------------------------------------

?>