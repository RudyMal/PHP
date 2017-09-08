<?php

// si l'utilisateur est loggé, le rediriger sur duckduckgo.com
// sinon afficher le message : "Vous n'êtes pas loggé"

session_start();

$url = 'https://duckduckgo.com';

if (isset($_SESSION['logged'])) {
  if ($_SESSION['logged']) {
    header("Location:" . $url, true, 302);
  } else {
    echo "Vous n'êtes pas loggé";
  }
} else {
  echo "Votre session n'est pas ouverte";
}
