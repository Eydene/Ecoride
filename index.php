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

    <div class="search_bar">
        <form method="POST" action="../backend/covoiturage.php">
            <input type="text" placeholder="rechercher un covoiturage avec une adresse:" name="search">
            <button type="submit">rechercher</button>
        </form>
    </div>





</body>

</html>