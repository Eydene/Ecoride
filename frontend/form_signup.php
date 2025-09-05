<?php require ('../backend/signup.php');?>
<!DOCTYPE html>
<html lang="fr">
<?php include '../includes/head.php'; ?>

<body>
    <br><br>
    <form class="container" name="Formulaire_inscription" method="POST">

        <?php if(isset($errorMsg)){echo "<p class='errorMsg'>".$errorMsg."</p>";}?>

        <div class="mb-3">
            <label for="pseudo">Entrez un pseudo:</label>
            <input type="text" placeholder="Pseudo" name="pseudo">
        </div>

        <div class="mb-3">
            <label for="mail">Entrez un Email:</label>
            <input type="email" placeholder="Email" name="mail">
        </div>
        <div class="mb-3">
            <label for="mdp">Entrez un Mot de passe:</label>
            <input type="password" placeholder="Mot de passe" name="mdp">
        </div>
        <button type="submit" name="envoyer" class="btn btn-primary">Inscription</button>
        <br><br>
        <a href="form_login.php">J'ai déjà un compte, je me connecte</a>
    </form>


</body>

</html>