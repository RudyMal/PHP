<?php

session_start();

$product = '';
$quantity = '';

if (isset($_SESSION['product'])) {
$product = $_SESSION['product'];
}
if (isset($_SESSION['quantity'])) {
$quantity = $_SESSION['quantity'];
}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    produit : <?= htmlentities($product) ?><br />
    quantité : <?= htmlentities($quantity) ?><br />

    <a href="tunnel-03.php">commander</a>

  </body>
</html>
