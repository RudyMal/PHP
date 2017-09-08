<!-- stocker les données de l'utilisateur dans :
-la variable $URL
-la variable $tags

afficher le contenu de ces variables dans la balise body -->

<?php

$url = '';
$tags = [];

if ($_POST) {
  // var_dump($_POST);

  if (isset($_POST['url'])) {
    $url = $_POST['url'];
  }

  if (isset($_POST['tags'])) {
    $tags = $_POST['tags'];
  }
}


?><!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="utf-8" />
   <title></title>
 </head>
 <body>

   <div>url: <?= htmlentities($url) ?></div>

   <div>tags:</div>

   <ul>
     <?php
     foreach ($tags as $key => $value) {
       echo '<li>' . htmlentities($value) . '</li>';
     }
     ?>
   </ul>




 </body>

 </html>
