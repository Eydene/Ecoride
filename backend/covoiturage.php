<?php

require('database.php');

    if (isset($_POST['rechercher'])) {
        if (!empty($_POST['lieu_depart']) && !empty($_POST['lieu_arrivee']) && !empty($_POST['date_depart'])){
            $lieu_depart = htmlspecialchars($_POST['lieu_depart']);
            $lieu_arrivee = htmlspecialchars($_POST['lieu_arrivee']);
            $date_arrivee = $_POST['date_arrivee'];

            

        $iscovoit = $bdd->prepare('SELECT * FROM covoiturage WHERE lieu_depart = ? AND lieu_arrivee = ? AND date_depart = ? AND nb_places > 0');
        $iscovoit->execute([$lieu_depart, $lieu_arrivee, $date_arrivee]);
        $result= $iscovoit->fetchALL(); 

        
        if (count($result) > 0) {
            echo "<h1>Voici les trajets disponibles pour votre recherche: </h1>";
            foreach ($result as $covoit){
                echo $covoit;
            }
        }else{
            echo "<p>Aucun résultat trouvé pour votre demande, n'hésitez pas à proposer votre voyage !</p>";
        }
    }else{
        echo "<p>Veuillez remplir le formulaire entièrement !</p>";
    }
}

?>