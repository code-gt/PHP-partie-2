<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Formulaire de Connexion</h2>
    <form method="post" action="">
        <label for="login">Login :</label>
        <input type="text" id="login" name="login" required>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    // Définissez les cookies ici
    ?>
    <br>
    <a href="show_cookies.php">Voir les cookies</a>
    <br>
    <a href="update_cookies.php">Mettre à jour les cookies</a>
</body>
</html>
