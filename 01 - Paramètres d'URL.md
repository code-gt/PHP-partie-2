# PHP - Les paramètres d'URL

Les paramètres d'URL permettent de transmettre des informations à une page web via l'URL. En PHP, vous pouvez récupérer ces paramètres à l'aide de la superglobale `$_GET`. Voici une série d'exercices pour vous familiariser avec cette notion.

**Exemple :**

Imaginons que vous avez une URL comme celle-ci : `index.php?city=Paris&country=France`.

- `city` et `country` sont des paramètres d'URL.
- Vous pouvez récupérer ces valeurs en PHP en utilisant `$_GET['city']` et `$_GET['country']`.
- Vous pouvez ensuite afficher ces valeurs sur votre page web.

Voici comment vous pourriez écrire le code PHP pour afficher ces paramètres :

```php
<?php
if (isset($_GET['city']) && isset($_GET['country'])) {
    $city = $_GET['city'];
    $country = $_GET['country'];
    echo "Ville : " . htmlspecialchars($city) . "<br>";
    echo "Pays : " . htmlspecialchars($country);
} else {
    echo "Les paramètres 'city' et 'country' ne sont pas définis dans l'URL.";
}
?>
```

## Exercice 1

**Objectif :** Vérifier l'existence de paramètres dans l'URL et les afficher.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `lastname` et `firstname` existent dans l'URL suivante : `index.php?lastname=Nemare&firstname=Jean`.
- Affichez les valeurs de ces paramètres si elles existent.

**Explication :** Utilisez `isset()` pour vérifier l'existence des paramètres.

## Exercice 2

**Objectif :** Vérifier l'existence d'un paramètre spécifique et afficher un message en conséquence.

**Consignes :**
- Créez une page `index.php`.
- Testez que le paramètre `age` existe dans l'URL suivante : `index.php?lastname=Nemare&firstname=Jean`.
- Si le paramètre `age` existe, affichez sa valeur. Sinon, affichez un message indiquant que le paramètre n'existe pas.

**Explication :** Utilisez `isset()` pour vérifier l'existence du paramètre et une condition pour afficher le message approprié.

## Exercice 3

**Objectif :** Vérifier l'existence de plusieurs paramètres de date et les afficher.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `startDate` et `endDate` existent dans l'URL suivante : `index.php?startDate=2/05/2016&endDate=27/11/2016`.
- Affichez les valeurs de ces paramètres si elles existent.

**Explication :** Utilisez `isset()` pour vérifier l'existence des paramètres.

## Exercice 4

**Objectif :** Vérifier l'existence de paramètres techniques et les afficher.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `language` et `server` existent dans l'URL suivante : `index.php?language=PHP&server=LAMP`.
- Affichez les valeurs de ces paramètres si elles existent.

**Explication :** Utilisez `isset()` pour vérifier l'existence des paramètres.

## Exercice 5

**Objectif :** Vérifier l'existence d'un paramètre numérique et l'afficher.

**Consignes :**
- Créez une page `index.php`.
- Testez que le paramètre `week` existe dans l'URL suivante : `index.php?week=12`.
- Affichez la valeur de ce paramètre si elle existe.

**Explication :** Utilisez `isset()` pour vérifier l'existence du paramètre.

## Exercice 6

**Objectif :** Vérifier l'existence de paramètres de localisation et les afficher.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `building` et `room` existent dans l'URL suivante : `index.php?building=12&room=101`.
- Affichez les valeurs de ces paramètres si elles existent.

**Explication :** Utilisez `isset()` pour vérifier l'existence des paramètres.

## Exercices supplémentaires

### Exercice 7

**Objectif :** Vérifier l'existence de paramètres et afficher un message personnalisé.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `username` et `userid` existent dans l'URL suivante : `index.php?username=jdoe&userid=123`.
- Affichez un message de bienvenue utilisant ces paramètres si elles existent.

### Exercice 8

**Objectif :** Vérifier l'existence de paramètres et effectuer une opération mathématique.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `number1` et `number2` existent dans l'URL suivante : `index.php?number1=10&number2=20`.
- Affichez la somme de ces deux nombres si elles existent.

### Exercice 9

**Objectif :** Vérifier l'existence de paramètres et afficher une liste.

**Consignes :**
- Créez une page `index.php`.
- Testez que les paramètres `item1`, `item2`, et `item3` existent dans l'URL suivante : `index.php?item1=apple&item2=banana&item3=cherry`.
- Affichez ces éléments sous forme de liste si elles existent.

---

Ces exercices permettront aux élèves de mieux comprendre comment manipuler les paramètres d'URL en PHP.
