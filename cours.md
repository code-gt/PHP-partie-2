### **1. Les Formulaires en PHP**

Les formulaires sont des éléments clés de l'interaction utilisateur sur les sites web. Ils permettent aux utilisateurs de saisir des données, de les envoyer au serveur, et de recevoir une réponse.

### a. Créer un Formulaire HTML

Pour commencer, voici un exemple simple de formulaire de connexion :

```html
<form action="traitement.php" method="post">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" id="username" name="username" required>
    
    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required>
    
    <input type="submit" value="Se connecter">
</form>
```

### b. Traitement des Données du Formulaire en PHP

Une fois que l'utilisateur remplit le formulaire et appuie sur "Se connecter", nous devons traiter les données en PHP. Voici comment récupérer les données :

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Ici, vous pouvez vérifier l'authenticité de l'utilisateur, par exemple, en comparant les informations avec une base de données.
}
?>
```


### **2. Les Sessions en PHP**

Les sessions sont utilisées pour stocker des informations sur l'utilisateur tout au long de sa visite sur le site. Elles sont très utiles pour garder l'utilisateur connecté et stocker des données temporaires.

### a. Démarrer une Session

Pour commencer une session en PHP, vous devez ajouter **`session_start();`** en haut de chaque page où vous souhaitez utiliser des sessions.

### b. Stocker des Données dans une Session

Vous pouvez stocker des données dans une session comme ceci :

```php
<?php
session_start();
$_SESSION["username"] = "utilisateur123";
?>
```

### c. Accéder aux Données de Session

Pour accéder aux données de session ultérieurement, vous pouvez les récupérer de cette manière :

```php
<?php
session_start();
echo "Bienvenue, " . $_SESSION["username"];
?>
```

### **3. Les Cookies en PHP**

Les cookies qui ne sont à pas confondre avec vos gâteaux favoris 🍪 sont de petits fichiers texte stockés sur l'ordinateur de l'utilisateur. Ils sont souvent utilisés pour suivre les préférences de l'utilisateur ou garder une session active.

### a. Définir un Cookie

Pour définir un cookie en PHP, vous pouvez utiliser la fonction **`setcookie()`** :

```php
<?php
setcookie("nom_cookie", "valeur_cookie", time() + 3600, "/");
?>
```

### b. Lire un Cookie

Pour lire un cookie, vous pouvez utiliser la superglobale **`$_COOKIE`** :

```php
<?php
$cookie_value = $_COOKIE["nom_cookie"];
echo "Valeur du cookie : " . $cookie_value;
?>
```

Voilà ! Vous avez maintenant une introduction aux formulaires, aux sessions et aux cookies en PHP natif. Ces concepts sont fondamentaux pour créer des sites web interactifs et personnalisés, à la différence des pages web statiques. N'hésitez pas à explorer davantage et à pratiquer pour devenir un développeur web PHP compétent. Bonne chance dans votre apprentissage !
