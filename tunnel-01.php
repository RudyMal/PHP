<?php

// dans tunnel-01.php, créer un formulaire avec :
// -un champ texte nommé "product"
// -un champ numérique nommé "quantity"

// le formulaire doit envoyé les données à tunnel-02.php
//
// dans tunnel-02.php, récupérer les données et insérer les dans les clés "product" et "quantity" de la variable de session
//
// afficher les clés "product" et "quantity" de la variable de session
//
// ajouter un lien nommé "commander" qui renvoit vers la page tunnel-03.php
//
// dans tunnel-03.php, afficher les clés "product" et "quantity" de la variable de session

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="tunnel-02.php" method="post">

      <input type="text" name="product" value="" placeholder="Product" /><br/>

      <input type="number" name="quantity" value="" placeholder="Quantity" /><br/>

      <input type="submit" value="Valider" />

    </form>

  </body>
</html>
