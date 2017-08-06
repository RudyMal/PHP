<?php

// créer une fonction BooleanToString qui :
// - prend une variable en paramètre
// - renvoie la chaine de caractères "vrai" si la variable est true
// - renvoie la chaine de caractères "faux" si la variable est false

// appeler cette fonction avec :
// - une valeur true et afficher le résultat
// - une valeur false et afficher le résultat

$a = true;

function BooleanToString($a){
  if ($a){
    return "true";
  } else if (!$a){
    return "false";
  }
}

echo BooleanToString($a);
echo "<br />\n";
//
// // ou
//
// function BooleanToString2($booleanValue){
//   return $booleanValue ? "vrai" : "faux";
// }
//
// $result = BooleanToString2(true);
// echo $result;
// echo "<br />\n";
//
// $result = BooleanToString2(false);
// echo $result;
// echo "<br />\n";
//
// function BooleanToString3($booleanValue) {
//   if ($booleanValue === true){
//     return "vrai";
//   } else if ($booleanValue === false) {
//     return "faux";
//   } else {
//     return "false";
//   }
// }
//
// $result = BooleanToString3("foo bar baz");
//
// if ($result == false) {
//   echo "booleanValue n'est pas une valeur bolléenne";
//   echo "<br />\n";
// } else {
//   echo $result;
//   echo "<br />\n";
// }
//
// définition d'une fonction avec déclaration type

// function BooleanToString4(bool $booleanValue){
//   return $booleanValue ? "vrai" : "faux";
// }
//
// echo BooleanToString4(true);
// echo "<br />\n";
//
// echo BooleanToString4(false);
// echo "<br />\n";
//
// echo BooleanToString4("foo bar baz");
// echo "<br />\n";
