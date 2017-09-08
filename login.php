<!-- creer un formulaire de login :
- champ login
- champ password

récupérer ces données côté php puis :
-afficher les données de l'utilisateur dans les champs
vérifier que :
-le login correspond à "toto"
-le password correspond à "123"
-afficher un message d'erreur si le login ou le mot de passe est faux
-afficher un message de bienvenu si le login et le mot de passe sont corrects -->

<!-- <?php

// $login = '';
// $password = '';
//
// $toto = 'toto';
// $pass = '123';
//
// if ($_POST) {
//
//   if (isset($_POST['login'])) {
//     $login = $_POST['login'];
//   }
//
//   if (isset($_POST['password'])) {
//     $password = $_POST['password'];
//   }
// }
//
// if ($login != $toto || $password != $pass) {
//   echo "<script>alert(\"Attention ! Le login et/ou le password sont faux !\")</script>";
// } else {
//   echo "<script>alert(\"Bienvenue\")</script>";
// }

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <form action="login.php" method="post">

      <input type="text" name="login" value="<?php echo htmlentities($login); ?>" placeholder="login" /><br />

      <input type="password" name="password" placeholder="password" value="<?php echo htmlentities($password); ?>" /><br />

      <input type="submit" value="Envoyer" />

    </form>

  </body>

  </html> -->

<!-- correction -->

<!-- <?php

// $login = '';
// $password = '';
// $message = '';
//
// if ($_POST) {
//   // var_dump($_POST);
//
//   if (isset($_POST['login'])) {
//     $login = $_POST['login'];
//   }
//
//   if (isset($_POST['password'])) {
//     $password = $_POST['password'];
//   }
//
//   if ($login == 'toto' && $password == '123') {
//     $message = 'Bienvenue !';
//   } else {
//     $message = 'Votre login ou votre mot de passe est erroné';
//   }
// }

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <div><?= htmlentities($message) ?></div>

    <form action="login.php" method="post">

      <input type="text" name="login" value="<?= htmlentities($login) ?>" placeholder="login" /><br />

      <input type="password" name="password" placeholder="password" value="<?= htmlentities($password) ?>" /><br />

      <input type="submit" value="Envoyer" />

    </form>

  </body>

  </html> -->

<!-- version compliquer -->

<?php

$login = '';
$password = '';
$message = '';

if ($_POST) {
  // var_dump($_POST);

  if (isset($_POST['login'])) {
    $login = $_POST['login'];
  }

  if (isset($_POST['password'])) {
    $password = $_POST['password'];
  }

  if ($login == 'toto' && $password == '123') {
    $message = 'Bienvenue !';
  } else {
    $message = 'Votre login ou votre mot de passe est erroné';
  }
}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <div><?= htmlentities($message) ?></div>

    <form action="login.php" method="post">

      <input type="text" name="login" value="<?= htmlentities($login) ?>" placeholder="login" /><br />

      <input type="password" name="password" placeholder="password" value="<?= htmlentities($password) ?>" /><br />

      <input type="submit" value="Envoyer" />

    </form>

    <script>
      var message = '<?= addslashes($message) ?>';

      if (message) {
        alert(message);
      }
    </script>


  </body>

  </html>
