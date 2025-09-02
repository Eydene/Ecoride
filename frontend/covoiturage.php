<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../includes/navbar.php'; ?>
</head>

<body>

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

    </form>

</body>

</html>