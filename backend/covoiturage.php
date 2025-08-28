<?php
    if (isset($_POST['rechercher'])) {
    if (!empty($_POST['adresse_dep']) && !empty($_POST['adresse_arr']) && !empty($_POST['date'])){
        $adresse_dep = htmlspecialchars($_POST['adresse_dep']);
        $adresse_arr = htmlspecialchars($_POST['adresse_arr']);
        $date = htmlspecialchars($_POST['date']);

            /* je ne sais pas si je dois faire une requette préparée.. 


        $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mail, mdp)VALUES(:pseudo, :mail, :mdp)');
        $insertUser->bindValue('pseudo', $pseudo);
        $insertUser->bindValue('mail', $mail);
        $insertUser->bindValue('mdp', $mdp);

        $CreatedUser = $insertUser->execute();

        if ($CreatedUser){
            echo "Inscription réussie";
        }
    }else {
        echo "Veuillez compléter tous les champs !";
    }  */

    } 


?>