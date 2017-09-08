<?php

include("include/header.php");
$connection = new mysqli("localhost", "root", "123", "coursSQL1");
?>

<form class="form-horizontal">
  <fieldset>
    <legend>Liste des promotions</legend>
    <?php
    // if ($connection->connect_error) {
    //   die('Connect Error (' . $connection->connect_errno . ')'
    //     . $connection->connect_error);
    // }

    $request = "SELECT * FROM Promotion";
    $result = $connection->query($request);

    while ($row = $result->fetch_assoc()) {

      printf('
      <div class="form-group">
        <label class="col-md-4 control-label" for="button1id">%s %s</label>
        <div class="col-md-8">
          <a href="change-students.php?id=%s" class="btn btn-success">Editer</button></a>
          <a href="delete-students.php?id=%s" class="btn btn-danger">Supprimer</button></a>
        </div>
      </div>
      ',
      $row["id"],
      $row["name"],
      $row["id"],
      $row["id"]);
    }

    ?>
  </fieldset>
</form>

<?php

include("include/footer.php");

?>
