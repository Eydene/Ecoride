<?php require('../backend/secureAccount.php')?>
<!DOCTYPE html>
<html lang="fr">

<?php include '../includes/head.php'; ?>



<body>
    <div class="container">
        <div class="profile-card">
            <h2>Bonjour, Jean Dupont 👋</h2>
            <p class="info">Email : jean.dupont@example.com</p>
            <p class="credit">Crédits disponibles : 20</p>

            <div class="actions">
                <button class="btn"><i class="fas fa-plus-circle"></i> Proposer un trajet</button>
                <button class="btn"><i class="fas fa-car"></i> Ajouter un véhicule</button>
            </div>
        </div>

        <div class="trajets">
            <h3>Vos trajets récents</h3>
            <div class="trajet">
                <p><strong>Nantes → Angers</strong> le 12/09/2025</p>
                <p>Rôle : Conducteur</p>
            </div>
            <div class="trajet">
                <p><strong>Angers → Cholet</strong> le 05/09/2025</p>
                <p>Rôle : Passager</p>
            </div>
        </div>
    </div>
</body>

</html>