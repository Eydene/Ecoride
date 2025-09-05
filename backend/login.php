<?php  
require('database.php');
if(isset($_POST['envoyer'])){
    // Vérification que les champs demandés ne sont pas vides
    $checkifemptyfield = !empty($_POST['mail']) AND !empty($_POST['mdp']);
    if($checkifemptyfield){
        
        //données transmises dans mes requetes
        $user_mail = htmlspecialchars($_POST['mail']);
        $user_mdp = htmlspecialchars($_POST['mdp']); // pas besoin d'encrypter le mdp, nous l'avons d'ores et déjà fait dans l'inscription. Il s'agit uniquement de vérifier si le mdp est bon
        

        // Verification à travers l'adresse mail si l'utilisateur existe
        $checkIfUserExist = $bdd->prepare('SELECT * FROM users WHERE mail = ?');

        $checkIfUserExist->execute(array($user_mail));

        if ($checkIfUserExist->rowCount()>0) {

            //récupération des données utilisateur si il existe
            $userExist = $checkIfUserExist->fetch();

        
            //Vérification si le mdp encrypté et celui rentré dans form_login correspondent

            if(password_verify($user_mdp, $userExist['mdp'])){
                
                //authentification de l'utilisateur et récupération de ses données
                $_SESSION['auth'] = true;
                $_SESSION['nom'] = $userCreated['nom'];
                $_SESSION['prenom'] = $userCreated['prenom'];
                $_SESSION['mail'] = $userCreated['mail'];
                $_SESSION['pseudo'] = $userCreated['pseudo'];

                // Redirection vers son profil
                header('Location: ../frontend/profil.php');
                exit;
                

            }else {
                $errorMsg = "Votre mail et/ou votre mot de passe est incorect";
            }
        }else{
            $errorMsg = "Votre mail est incorrect";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs afin de vous enregistrer !";      
    }
}
?>