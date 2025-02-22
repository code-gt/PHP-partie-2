# PHP - Les formulaires

Les formulaires sont essentiels pour interagir avec les utilisateurs et recueillir des données. En PHP, vous pouvez traiter les données des formulaires en utilisant les méthodes GET et POST. Voici une série d'exercices pour vous familiariser avec la création et la gestion des formulaires en PHP.

**Exemple :**

Imaginons que vous avez un formulaire simple pour recueillir le nom et l'email d'un utilisateur. Voici comment vous pourriez écrire le code HTML et PHP pour traiter ce formulaire :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exemple de Formulaire</title>
</head>
<body>
    <h2>Exemple de Formulaire</h2>
    <form action="user.php" method="POST">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email">
        <br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
````

Et voici comment vous pourriez traiter ce formulaire dans `user.php` :

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat du Formulaire</title>
</head>
<body>
    <h2>Résultat du Formulaire</h2>
    <?php
    if (\$_SERVER["REQUEST_METHOD"] == "POST") {
        \$nom = htmlspecialchars(\$_POST['nom']);
        \$email = htmlspecialchars(\$_POST['email']);
        echo "Nom : " . \$nom . "<br>";
        echo "Email : " . \$email;
    } else {
        echo "Aucune donnée reçue.";
    }
    ?>
</body>
</html>
```

Dans cet exemple, nous utilisons la méthode POST pour envoyer les données du formulaire à `user.php`, où elles sont ensuite affichées.

***

## Exercice 1

**Objectif :** Utiliser le formulaire HTML demandant le nom et le prénom et rediriger vers `user.php` avec la méthode GET.

**Consignes :**
- Créez dans le fichier `index.php` avec un formulaire HTML5 valide.
- Utilisez la méthode GET pour envoyer les données à `user.php`.

## Exercice 2

**Objectif :** Créer un formulaire demandant le nom et le prénom et rediriger vers `user.php` avec la méthode POST.

**Consignes :**
- Créez dans le fichier `index.php` avec un formulaire HTML5 valide.
- Utilisez la méthode POST pour envoyer les données à `user.php`.

## Exercice 3

**Objectif :** Afficher les données du formulaire de l'exercice 1 dans `user.php`.

**Consignes :**
- Dans `user.php`, récupérez les données envoyées par la méthode GET.
- Affichez le nom et le prénom.

## Exercice 4

**Objectif :** Afficher les données du formulaire de l'exercice 2 dans `user.php`.

**Consignes :**
- Dans `user.php`, récupérez les données envoyées par la méthode POST.
- Affichez le nom et le prénom.

## Exercice 5

**Objectif :** Créer un formulaire avec une liste déroulante pour la civilité, un champ texte pour le nom et un champ texte pour le prénom.

**Consignes :**
- Créez dans le fichier `index.php` avec un formulaire HTML5 valide.
- Ajoutez une liste déroulante pour la civilité (Mr ou Mme).
- Le formulaire doit rediriger vers `index.php`.

## Exercice 6

**Objectif :** Afficher les données du formulaire de l'exercice 5 si elles sont transmises.

**Consignes :**
- Si des données sont passées en POST ou en GET, affichez-les et ne montrez pas le formulaire.
- Sinon, affichez le formulaire.
- Utilisez une seule page pour gérer l'affichage et la soumission du formulaire.

## Exercice 7 : Formulaire complet avec affichage des réponses

**Objectif :** Créer un formulaire HTML complet et afficher les réponses soumises dans le même fichier.

**Consignes :**

- Dans le fichier `form.php`, créez un formulaire HTML avec les champs suivants :
  - Nom
  - Prénom
  - Âge
  - Adresse (trois champs : adresse, code postal, ville)
  - Un champ de sélection (`<select>`) pour le hobby préféré avec les options suivantes : jeux vidéo, cinéma, lecture, musique, autres.
- Utilisez la méthode POST pour envoyer les données du formulaire.
- Lorsque le formulaire est soumis, affichez les réponses proprement formatées en HTML dans le même fichier `form.php` à l'aide de balises HTML.
- Assurez-vous que le formulaire est valide en HTML5.
