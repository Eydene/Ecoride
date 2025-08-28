<?php

session_start();

require('database.php');
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['mail']) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mail = $_POST['mail'];
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);


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
    }
} 

?>