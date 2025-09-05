<?php
require('database.php');
// Réception du formulaire d'inscription
if(isset($_POST['envoyer'])){
    // Vérification que les champs demandés ne sont pas vides
    $checkifemptyfield = !empty($_POST['mail']) AND !empty($_POST['mdp']) AND !empty($_POST['pseudo']);
    if($checkifemptyfield){

        // Données à envoyer dans mes requetes pour la bdd
        $user_mail = htmlspecialchars($_POST['mail']);
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

        

        // Verification à travers l'adresse mail pour ne pas rentrer 2 fois la même personne
        $isalreadyexist = $bdd->prepare('SELECT mail FROM users WHERE mail = ?'); 
        $isalreadyexist->execute(array($user_mail));

        // si il n'existe pas, je prépare une requête pour enregistrer les données dans la bdd table users
        if($isalreadyexist->rowCount()==0){ 
            $insertUser = $bdd->prepare('INSERT INTO users(mail, mdp, pseudo)VALUES(?, ?, ?)');
            $insertUser->execute(array($user_mail, $user_mdp, $user_pseudo));
            
            // requete recupérer les données utilisateurs nécessaire pour pouvoir créer la session utilisateur.
            $getUsersInfo = $bdd->prepare('SELECT id_client, nom, prenom, mail, pseudo FROM users WHERE mail = ?');  
            $getUsersInfo->execute(array($user_mail));

            if ($getUsersInfo->rowCount() > 0){  

                $userCreated = $getUsersInfo->fetch();

                // authentification de l'utilisateur et récupération des données dans des sessions
                $_SESSION['auth'] = true;
                $_SESSION['nom'] = $userCreated['nom'];
                $_SESSION['prenom'] = $userCreated['prenom'];
                $_SESSION['mail'] = $userCreated['mail'];
                $_SESSION['pseudo'] = $userCreated['pseudo'];

                // L'utilisateur connecté est redirigé sur sa page de profile
                header('Location: ../frontend/profil.php');
                exit;
            }

        }else{
            $errorMsg= "L'utilisateur existe déjà !";
        }

        
    }else{
        $errorMsg = "Veuillez compléter tous les champs afin de vous enregistrer !";      
    }
} 

//|| !filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)

?>