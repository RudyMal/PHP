<?php

// démarrage de la session

session_start();

// affichage de la clé

if (isset($_SESSION['key'])) {
  echo $_SESSION['key'];
}
