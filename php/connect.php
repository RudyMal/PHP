<?php

include("include/header.php")

$connection = new mysqli('localhost', 'root', 'wlprrlqhgUyftCnY', 'coursSQL1');
if ($connection->connect_error) {
   printf("Erreur de connexion a la base de données. <br>Message d'erreur : %s<br>Code d'erreur: %s)"
           . $mysqli->connect_error);
}
else {
printf ('Success, you did it ! ');
}
?>
