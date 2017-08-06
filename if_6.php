<?php

$i = random_int(0, 50);

echo "$i\n";

// // si $i est compris entre 0 et 9, affichez "i est plus petit que 10"
// // si $i est compris entre 10 et 19, affichez "i est plus petit que 20"
// // si $i est compris entre 20 et 29, affichez "i est plus petit que 30"
// // si $i est compris entre 30 et 39, affichez "i est plus petit que 40"
// // sinon "i est plus grand ou égal à 40"

if ($i >= 0 && $i <= 9) {
  echo "i est plus petit que 10\n";
} else if ($i >= 10 && $i <= 19) {
  echo "i est plus petit que 20\n";
} else if ($i >= 20 && $i <= 29) {
  echo "i est plus petit que 30\n";
} else if ($i >= 30 && $i <= 39) {
  echo "i est plus petit que 40\n";
} else {
  echo "i est supérieur à 40\n";
}
