<?php
// On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
$page = $_SERVER['REQUEST_URI'];
$page = str_replace("http://0.0.0.0:8000/sample/", "",$page);

include("config/db.php");
$connexion = new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_base
);
?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendor/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" />
  <link href="css/main.css" rel="stylesheet"/>
</head>
<body>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navibar">
      <ul>
        <li <?php if($page == "index.php"){echo 'class="active"';} ?>><a href="index.php">Acceuil</a></li>
        <li <?php if($page == "students.php"){echo 'class="active"';} ?>><a href="students.php">Liste</a></li>
        <li <?php if($page == "create_students.php"){echo 'class="active"';} ?>><a href="create_students.php">Creer</a></li>
        <li <?php if($page == "change-students.php"){echo 'class="active"';} ?>><a href="change-students.php">Modifier</a></li>
        <li <?php if($page == "delete-students.php"){echo 'class="active"';} ?>><a href="delete-students.php">Supprimer</a></li>
      </ul>
    </div>
    <div class="navibar-right">
      <ul>
      <li><button id="validate" name="validate" class="btn btn-danger centerme"><a href="/sample/acceuil.php">Promotions</a></li>
      </ul>
    </div>
