<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../includes/navbar.php'; ?>
</head>

<body>

    <form class="signup_form" method="POST" action="../backend/signup.php">
        <label for="pseudo">Entrez un pseudo:</label><br><br>
        <input type="text" placeholder="Pseudo" name="pseudo" autocomplete="off">
        <br />
        <label for="mail">Entrez un Email:</label><br><br>
        <input type="email" placeholder="Email" name="mail" autocomplete="off">
        <br />
        <label for="mdp">Entrez un Mot de passe:</label><br><br>
        <input type="password" placeholder="Mot de passe" name="mdp" autocomplete="off">
        <br /><br />
        <button type="submit" name="envoyer">Inscription</button>
    </form>

    <hr>

    <form class="login_form" method="POST" action="../backend/login.php">
        <label for="pseudo">Entrez votre pseudo:</label><br><br>
        <input type="text" placeholder="Pseudo" name="pseudo" autocomplete="off">
        <br />
        <label for="mdp">Entrez votre Mot de passe:</label><br><br>
        <input type="password" placeholder="Mot de passe" name="mdp" autocomplete="off">
        <br /><br />
        <button type="submit" name="envoyer">Connexion</button>
    </form>


</body>

</html>