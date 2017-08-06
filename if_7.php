<?php

$age = random_int(12, 25);
$abonne = random_int(0, 1);
echo "$age\n";
echo "$abonne\n";

// // déterminez si un utilisateur a droit ou non d'accéder à une ressource :
// // - non si l'utilisateur a moins de 16 ans
// // - non si l'utilisateur a 16 ou plus mais qu'il n'est pas abonné
// // - oui si l'utlisateur a 16 ou plus et qu'il est abonné

if ($age < 16) {
  echo "Vous avez moins de 16 ans, donc vous n'avez pas accès\n";
} else if ($age >= 16 && $abonne == 0) {
  echo "Vous avez 16 ans ou plus mais vous n'êtes pas abonné, donc vous n'avez pas accès\n";
} else if ($age >= 16 && $abonne == 1) {
  echo "Vous avez 16 ans ou plus et vous êtes abonné, donc vous avez accès\n";
}
