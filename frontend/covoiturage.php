<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../includes/navbar.php'; ?>
</head>

<body>

    <form method="POST" action="../backend/covoiturage.php">
        <label for="adresse_dep">Adresse de départ:</label><br><br>
        <input type="text" placeholder="Adresse_depart" name="adresse_dep" autocomplete="off">
        <br />
        <label for="adresse_arr">Adresse d'arrivée:</label><br><br>
        <input type="text" placeholder="Adresse_arrivee" name="adresse_arr" autocomplete="off">
        <br />
        <label for="date">date:</label><br><br>
        <input type="text" placeholder="Date du départ" name="date" autocomplete="off">
        <br /><br />
        <button type="submit" name="rechercher">Rechercher un covoiturage</button>

    </form>

</body>

</html>