<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mettre à Jour les Cookies</title>
</head>
<body>
    <h2>Mettre à Jour les Cookies</h2>
    <form method="post" action="">
        <label for="new_login">Nouveau Login :</label>
        <input type="text" id="new_login" name="new_login" required>
        <label for="new_password">Nouveau Mot de passe :</label>
        <input type="password" id="new_password" name="new_password" required>
        <input type="submit" value="Mettre à jour">
    </form>
    <?php
     // Ajoutez votre code PHP ici pour mettre à jour les cookies après la soumission du formulaire.
    ?>
    <br>
    <a href="login_form.php">Retour au formulaire de connexion</a>
    <br>
    <a href="show_cookies.php">Voir les cookies</a>
</body>
</html>
