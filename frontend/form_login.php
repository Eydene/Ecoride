<?php require ('../backend/login.php');?>
<!DOCTYPE html>
<html lang="fr">

<?php include '../includes/head.php'; ?>

<body>
    <br><br>
    <form class="container" name="Formulaire_de_connexion" method="POST">

        <?php if(isset($errorMsg)){echo "<p class='errorMsg'>".$errorMsg."</p>";}?>
        <div class="mb-3">
            <label for="mail">Entrez votre adresse Email:</label>
            <input type="email" placeholder="Email" name="mail">
        </div>
        <div class="mb-3">
            <label for="mdp">Entrez votre mot de passe:</label>
            <input type="password" placeholder="Mot de passe" name="mdp">
        </div>
        <button type="submit" name="envoyer" class="btn btn-primary">Connexion</button>
        <br><br>
        <a href="form_signup.php">Je n'ai pas de compte, je m'inscris !</a>
    </form>

</body>

</html>