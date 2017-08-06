<?php

$i = random_int(0, 2);

echo "i == $i\n";

// // $i représente un nombre de personnes
// // en fonction de $i, affichez la phrase correspondante :
// // - il n'y a personne
// // - il y a une seule personne
// // - il y a plusieurs personnes

if ($i == 0) {
  echo "il n'y a personnes\n";
} else if ($i == 1) {
  echo "il y a une seule personne\n";
} else if ($i > 1) {
  echo "il y a plusieurs personnes\n";
}
