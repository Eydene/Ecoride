<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="../Ecoride/assets/style.css">
    <?php include 'includes/navbar.php'; ?>

</head>

<body>

    <section class="pres">
        <h1>En savoir plus sur nous :</h1>
        <h3>Ecoride une entreprise à but responsable, se déplacer oui, mais se déplacer intelligement</h3>

        <p>La startup "EcoRide" fraichement crée en France, a pour objectif de réduire l'impact
            environnemental des déplacements en encourageant le covoiturage.
            L’ambition "EcoRide" est de devenir la principale plateforme de covoiturage pour les
            voyageurs soucieux de l'environnement et ceux qui recherchent une solution économique
            pour leurs déplacements.
        </p>

    </section>

    <form class="covoit_form" method="POST" action="../backend/covoiturage.php">
        <label for="lieu_depart">Adresse de départ:</label><br><br>
        <input type="text" placeholder="Adresse de départ" name="lieu_depart" autocomplete="off">
        <br />
        <label for="lieu_arrivee">Adresse d'arrivée:</label><br><br>
        <input type="text" placeholder="Adresse d'arrivée" name="lieu_arrivee" autocomplete="off">
        <br />
        <label for="date_depart">date:</label><br><br>
        <input type="date" placeholder="Date du départ" name="date_depart" value="2025-09-02" min="2025-09-02"
            max="2099-12-31" autocomplete="off">
        <br /><br />
        <button type="submit" name="rechercher">Rechercher un covoiturage</button>




</body>

</html>