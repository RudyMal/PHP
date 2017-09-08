<!-- Pour se protéger IMPORTANT!!! -->

<?php

$title = '';
$body = '';

 if ($_POST) {
  // var_dump($_POST);

  if (isset($_POST['title'])) {
  $title = $_POST['title'];
}

if (isset($_POST['body'])) {
  $body = $_POST['body'];
 }
}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <form action="form-01.php" method="post">

      <input type="text" name="title" value="<?php echo htmlentities($title); ?>" placeholder="titre" /><br />

      <textarea name="body" placeholder="texte"><?php echo htmlentities($body); ?></textarea><br />

      <input type="submit" value="Envoyer" />

    </form>

  </body>

  </html>
