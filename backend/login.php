<?php
    
session_start();

require('database.php');

if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

    $insertUser = $bdd->prepare('SELECT * FROM users WHERE pseudo = :pseudo'); // Je ne peux pas mettre le mdp dans la requête préparée à cause du password_hash, il sera vérifié ensuite
    $insertUser->bindValue('pseudo', $pseudo);
    $insertUser->execute();

    $CreatedUser = $insertUser->fetch(PDO::FETCH_ASSOC);

    if ($CreatedUser) {
        $passwordHash = $CreatedUser['mdp'];
        if(password_verify($mdp, $passwordHash)){
            echo "Connexion réussie !";
            header('Location: profil.php') // redirection vers sa page perso
        }else {
        echo "Pseudo ou mot de passe invalide..."; // pour plus de sécurité, j'évite de donner trop d'indication sur la source de l'erreur
    }
        
    }
} 
?>