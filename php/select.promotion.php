<?php
include("include/header.php")

 ?>

  <div class="container">

    <?php
    $connection = new mysqli('localhost', 'root', '123', 'coursSQL1');
    printf("<h1>Liste des promotions");
    if ($result = $connection->query("SELECT * FROM promotions")) {
      printf("Le résultat de la requête contient %d lignes.<br/>", $result->num_rows);
      printf("<br />");
      printf("<ul>");
      while ($row = $result->fetch_assoc()) {
        printf("<li> %s  %s .\n</li>", $row["id"], $row["name"]);
      }
    }
    else {
      printf('Erreur de requête');
    }
    ?>
  </ul>
</div>
