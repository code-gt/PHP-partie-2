# PHP - Les dates

# Mini-cours : Gestion des dates en PHP

En PHP, la gestion des dates est essentielle pour de nombreuses applications, que ce soit pour afficher la date actuelle, calculer des intervalles de temps, ou formater des dates de manière spécifique. Voici un aperçu des concepts clés :

## Fonction `date()`

La fonction `date()` est utilisée pour formater une date ou une heure en une chaîne lisible. Elle prend deux arguments principaux :
- **Format :** Une chaîne contenant les caractères de formatage.
- **Timestamp :** Un timestamp Unix optionnel (par défaut, la date et l'heure actuelles sont utilisées).

**Exemple :**
```php
echo date('d/m/Y'); // Affiche la date au format jj/mm/aaaa
```

## Caractères de formatage

 - **d** : Jour du mois, avec zéro initial (01 à 31).
 - **m** : Mois, avec zéro initial (01 à 12).
 - **Y** : Année complète (par exemple, 2023).
 - **l** : Jour de la semaine, en toutes lettres (par exemple, "lundi").
 - **F** : Mois, en toutes lettres (par exemple, "janvier").

**Exemple :**
```php
echo date('l j F Y'); // Affiche "lundi 2 octobre 2023"
```

## Fonction strtotime()

La fonction `strtotime()` convertit une date en anglais en timestamp Unix. Elle est utile pour manipuler des dates exprimées en texte.

**Exemple :**
```php
\$timestamp = strtotime('next Monday');
echo date('d/m/Y', \$timestamp); // Affiche la date du prochain lundi
```


## Fonction time()

La fonction `time()` retourne le timestamp Unix actuel, qui est le nombre de secondes écoulées depuis le 1er janvier 1970 (l'époque Unix).

**Exemple :**
```php
echo time(); // Affiche le timestamp actuel
```

## Calculs de dates

Pour calculer des intervalles de temps, vous pouvez utiliser des timestamps et des opérations arithmétiques.

**Exemple :**
```php
\$future = strtotime('+20 days');
echo date('d/m/Y', \$future); // Affiche la date dans 20 jours
```


Pour tous les exercices, vous pouvez utiliser le site [php.net](http://php.net) pour consulter la documentation officielle. N'hésitez pas à créer des pages avec du HTML/CSS pour afficher les résultats.

## Exercice 1

**Objectif :** Afficher la date courante au format `jj/mm/aaaa`.

**Consignes :**
- Utilisez la fonction `date()` pour formater la date courante.
- Exemple de sortie : `16/05/2016`.

## Exercice 2

**Objectif :** Afficher la date courante au format `jj-mm-aa`.

**Consignes :**
- Utilisez la fonction `date()` pour formater la date courante.
- Exemple de sortie : `16-05-16`.

## Exercice 3

**Objectif :** Afficher la date courante avec le jour de la semaine et le mois en toutes lettres.

**Consignes :**
- Utilisez la fonction `date()` pour formater la date courante.
- Affichez le jour de la semaine et le mois en toutes lettres.
- Exemple de sortie : `mardi 2 août 2016`.
- **Bonus :** Faites-le en français.

## Exercice 4

**Objectif :** Afficher les timestamps.

**Consignes :**
- Affichez le timestamp du jour.
- Affichez le timestamp du mardi 2 août 2016 à 15h00.
- Utilisez la fonction `strtotime()` pour obtenir le timestamp.

## Exercice 5

**Objectif :** Calculer le nombre de jours entre deux dates.

**Consignes :**
- Calculez le nombre de jours entre la date du jour et le 16 mai 2016.
- Utilisez les fonctions `time()` et `strtotime()` pour obtenir les timestamps et calculez la différence.

## Exercice 6

**Objectif :** Afficher le nombre de jours dans le mois de février de l'année 2016.

**Consignes :**
- Utilisez la fonction `cal_days_in_month()` pour obtenir le nombre de jours dans le mois.

## Exercice 7

**Objectif :** Afficher la date du jour plus 20 jours.

**Consignes :**
- Utilisez la fonction `strtotime()` pour ajouter 20 jours à la date actuelle.
- Affichez le résultat au format `jj/mm/aaaa`.

## Exercice 8

**Objectif :** Afficher la date du jour moins 22 jours.

**Consignes :**
- Utilisez la fonction `strtotime()` pour soustraire 22 jours à la date actuelle.
- Affichez le résultat au format `jj/mm/aaaa`.

## TP : Calendrier dynamique

**Objectif :** Créer un formulaire permettant de sélectionner un mois et une année, puis afficher un calendrier correspondant.

**Consignes :**
- Créez un formulaire avec deux listes déroulantes : une pour le mois et une pour l'année.
- En fonction des choix de l'utilisateur, affichez un calendrier pour le mois et l'année sélectionnés.
- Utilisez les fonctions `cal_days_in_month()` et `date()` pour générer le calendrier.
