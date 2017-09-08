<?php

session_start();

if ($_POST) {

  if (isset($_POST['product'])) {
  $_SESSION ['product'] = $_POST['product'];
  }
  if (isset($_POST['quantity'])) {
  $_SESSION ['quantity'] = $_POST['quantity'];
  }
}

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

    <?php if ($product && $quantity): ?>

    <a href="tunnel-03.php">commander</a>

  <?php endif; ?>

  </body>
</html>
