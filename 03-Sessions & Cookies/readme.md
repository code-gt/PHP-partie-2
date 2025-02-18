# PHP - Variables superglobales, sessions et cookies

Dans cette série d'exercices, vous allez explorer l'utilisation des variables superglobales, des sessions et des cookies en PHP. Pour chaque exercice, assurez-vous de créer une page HTML5 valide et de soigner son CSS.

## Exercice 1

**Objectif :** Afficher des informations sur l'utilisateur et le serveur.

**Consignes :**
- À partir du fichier `user_info.php`, afficher les informations suivantes :
  - Le User Agent de l'utilisateur.
  - L'adresse IP de l'utilisateur.
  - Le nom du serveur.

**Explications :**
- Utilisez la superglobale `$_SERVER` pour récupérer ces informations.

## Exercice 2

**Objectif :** Utiliser les sessions pour passer des variables d'une page à une autre.

**Consignes :**
- Sur la page `index.php`, créez un lien vers une autre page (`page2.php`).
- Définissez directement dans le code les variables `lastname`, `firstname`, et `age`.
- Utilisez les sessions pour transmettre ces variables à `page2.php`.
- Affichez le contenu de ces variables sur `page2.php`.

**Explications :**
- Utilisez `session_start()` pour démarrer une session.
- Stockez les variables dans `$_SESSION`.

## Exercice 3

**Objectif :** Stocker les informations de connexion dans un cookie.

**Consignes :**
- Utilisez le formulaire du fichier `login_form.php`pour récupérer le login et le mot de passe de l'utilisateur.
- À la validation du formulaire, stockez ces informations dans un cookie.

**Explications :**
- Utilisez `setcookie()` pour créer un cookie.

## Exercice 4

**Objectif :** Récupérer et afficher les informations stockées dans un cookie.

**Consignes :**
- Affichez les informations du cookie créé à l'exercice 3 dans le fichier `show_cookies.php`.

**Explications :**
- Utilisez `$_COOKIE` pour accéder aux cookies.

## Exercice 5

**Objectif :** Modifier le contenu d'un cookie.

**Consignes :**
- Utilisez le fichier `update_cookies.php` pour modifier le contenu du cookie créé à l'exercice 3.

**Explications :**
- Utilisez `setcookie()` pour mettre à jour un cookie.