<?php

require('database.php');
    //réception du formulaire de recherche de covoiturage
    if (isset($_POST['rechercher'])) {
        $checkifemptyfield = !empty($_POST['lieu_depart']) AND !empty($_POST['lieu_arrivee']) AND !empty($_POST['date_depart']);
        if ($checkifemptyfield){
            $lieu_depart = htmlspecialchars($_POST['lieu_depart']);
            $lieu_arrivee = htmlspecialchars($_POST['lieu_arrivee']);
            $date_arrivee = $_POST['date_arrivee'];

            
        //Vérification si  
        $possibleCovoit = $bdd->prepare('SELECT * FROM covoiturage WHERE lieu_depart = ? AND lieu_arrivee = ? AND date_depart = ? AND nb_places > 0');
        $possibleCovoit->execute(array($lieu_depart, $lieu_arrivee, $date_arrivee));
        
        if ($possibleCovoit->rowCount()>0) {

            //récupération des données utilisateur si il existe
            $covoitExist = $possibleCovoit->fetch();

        
                          
            //authentification de l'utilisateur et récupération de ses données
            $_SESSION['auth'] = true;
            $_SESSION['nom'] = $userCreated['nom'];
            $_SESSION['prenom'] = $userCreated['prenom'];
            $_SESSION['mail'] = $userCreated['mail'];
            $_SESSION['pseudo'] = $userCreated['pseudo'];

            // Redirection vers la page de covoiturage
            header('Location: ../frontend/covoiturage.php');
            exit;
                

            
        }else{
            $errorMsg = "Aucun covoiturage trouvé apour ces données, n'hésitez pas à proposer votre voyage :";
        } 

        
        /*
        if (count($result) > 0) {
            echo "<h1>Voici les trajets disponibles pour votre recherche: </h1>";
            foreach ($result as $covoit){
                echo $covoit;
            }
        }else{
            echo "<p>Aucun résultat trouvé pour votre demande, n'hésitez pas à proposer votre voyage !</p>";
        }
    }else{
        $errorMsg = "Veuillez compléter tous les champs afin de rechercher un itinéraire !";
    }*/
} 

?>