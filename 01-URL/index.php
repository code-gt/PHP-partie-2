<?php
// EXERCICE 1
// Faire une page index.php.
// Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean
?>
<h2>Exercice 1</h2>
<form action="index.php" method="GET">
    <input type="text" name="lastname" value="Nemare">
    <input type="text" name="firstname" value="Jean">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher les paramètres 'lastname' et 'firstname'.
?>

<?php
echo '<br><br>';
// EXERCICE 2
// Faire une page index.php. Tester sur cette page que le paramètre 'age' existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean
?>
<h2>Exercice 2</h2>
<form action="index.php" method="GET">
    <input type="text" name="lastname" value="Nemare">
    <input type="text" name="firstname" value="Jean">
    <input type="text" name="age">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher le paramètre 'age'.
?>

<?php
echo '<br><br>';
// EXERCICE 3
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016
?>
<h2>Exercice 3</h2>
<form action="index.php" method="GET">
    <input type="date" name="startDate">
    <input type="date" name="endDate">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher les paramètres 'startDate' et 'endDate'.
?>

<?php
echo '<br><br>';
// EXERCICE 4
// Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?language=PHP&server=LAMP
?>
<h2>Exercice 4</h2>
<form action="index.php" method="GET">
    <input type="text" name="language" value="PHP">
    <input type="text" name="server" value="LAMP">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher les paramètres 'language' et 'server'.
?>


<?php
// EXERCICE 5
// Faire une page index.php.
// Tester sur cette page que le paramètre 'week' existe dans l'URL suivante : index.php?week=12
// Affichez la valeur de ce paramètre si elle existe.
?>
<h2>Exercice 5</h2>
<form action="index.php" method="GET">
    <input type="number" name="week" value="12">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher le paramètre 'week'.
?>

<?php
echo '<br><br>';

// EXERCICE 6
// Faire une page index.php.
// Tester sur cette page que les paramètres 'username' et 'userid' existent dans l'URL suivante : index.php?username=jdoe&userid=123
// Affichez un message de bienvenue utilisant ces paramètres si elles existent.
?>
<h2>Exercice 6</h2>
<form action="index.php" method="GET">
    <input type="text" name="username" value="jdoe">
    <input type="number" name="userid" value="123">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher un message de bienvenue.
?>

<?php
echo '<br><br>';
// EXERCICE 7
// Faire une page index.php.
// Tester sur cette page que les paramètres 'number1' et 'number2' existent dans l'URL suivante : index.php?number1=10&number2=20
// Affichez la somme de ces deux nombres si elles existent.
?>
<h2>Exercice 7</h2>
<form action="index.php" method="GET">
    <input type="number" name="number1" value="10">
    <input type="number" name="number2" value="20">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher la somme des deux nombres.
?>

<?php
echo '<br><br>';
// EXERCICE 8
// Faire une page index.php.
// Tester sur cette page que les paramètres 'item1', 'item2', et 'item3' existent dans l'URL suivante : index.php?item1=apple&item2=banana&item3=cherry
// Affichez ces éléments sous forme de liste si elles existent.
?>
<h2>Exercice 8</h2>
<form action="index.php" method="GET">
    <input type="text" name="item1" value="apple">
    <input type="text" name="item2" value="banana">
    <input type="text" name="item3" value="cherry">
    <button type="submit">Send</button>
</form>

<?php
// Ajoutez votre code PHP ici pour vérifier et afficher les éléments sous forme de liste.
?>
