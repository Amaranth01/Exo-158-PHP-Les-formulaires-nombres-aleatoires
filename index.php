<?php
/*
- Créer un script php qui permet de générer un nombre aléatoire compris entre x et y
- Coté front, créer un formulaire acceptant deux valeurs : x et y
- Envoyer le formulaire au script php et retourner le nombre aleatoire généré


- Pour générer un nombre aléatoire en PHP , vous pouvez utiliser la méthode mt_rand() ou rand()

http://php.net/manual/fr/function.mt-rand.php
*/

?>

<form action="form.php" method="post">
    <label for="number1">Entrez un nombre au hasard</label>
    <input type="number" name="number1" id="number1" required>

    <label for="number2">Entrez un autre nombre plus haut que le précédent</label>
    <input type="number" name="number2" id="number2" required>

    <input type="submit" name="submit">
</form>
