<?php
    
session_start();

require('database.php');

if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    $insertUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
    $insertUser->bindValue('pseudo', $pseudo);
    $insertUser->execute();

    $CreatedUser = $insertUser->fetch(PDO::FETCH_ASSOC);

    if ($CreatedUser) {
        $passwordHash = $CreatedUser['mdp'];
        if(password_verify($mdp, $passwordHash)){
            echo "Connexion réussie !";
        }else {
        echo "Pseudo ou mot de passe invalide...";
    }
        
    }
} 
?>