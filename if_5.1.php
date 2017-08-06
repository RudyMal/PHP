<?php

$i = random_int(1, 10);

echo "i == $i\n";

// // déterminez si $i est :
// // - égal à 5
// // - plus grand que 5
// // - se trouve dans le dernier cas (dite lequel)

if ($i == 5) {
  echo "i est égal à 5\n";
} else if ($i > 5) {
  echo "i est supérieur à 5\n";
} else if ($i < 5) {
  echo "i est inférieur à 5\n";
}
