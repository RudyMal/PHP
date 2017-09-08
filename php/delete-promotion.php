<?php
include("include/header.php");

$connection = new mysqli('localhost', 'root', '123', 'coursSQL1');
?>

  <div class="container">

    <?php
    // Si on n’a pas de id dans les paramètres de l’URL, on bloque la page
    if (isset($_GET["id"]) && $_GET["id"] != "" && $_GET["id"] != 0) {
      // Si on a des variables en POST, on tente de modifier la promotion ciblée
      if (isset($_POST["promotiondelete"]) && $_POST["promotiondelete"] == "oui") {
        $request = sprintf("DELETE FROM promotions WHERE id='%s'",
        $_GET["id"]);
        if($connection->query($request)) {
          printf("<div class='alert alert-success'>Promotion modifiée</div>");
        }
        else {
          // Gestion d’erreur SQL
          printf("<div class='alert alert-warning'>Erreur: %s</div>", $connection->error);
        }
      }
      else if (isset($_POST["promotiondelete"]) && $_POST["promotiondelete"] != "oui") {
        printf("<div class='alert alert-warning'> Erreur: Veuillez tapez oui !!!</div>");
      }
      // On a un id en GET, on sélectionne la promotion et ses informations
      $request = sprintf("SELECT * FROM promotions WHERE id=%s", $_GET["id"]);
      $result = $connection->query($request);
      $promotion = $result->fetch_assoc();
    }
    else {
      // message d’alerte si on n’a pas d’id en paramètre d’URL
      printf("<div class='alert alert-danger'>Pas d’ID renseigné</div>");
      die();
    }
    ?>
    <form method="post" class="form-horizontal">
      <fieldset>

        <!-- Form Name -->
        <legend>Supprimer une promotion</legend>

        <!-- Text input
        Notez les balises PHP qui permettent l’affichage dynamique -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="promotionname">Nom de la promotion</label>
          <div class="col-md-4">
            <input id="promotionname" name="promotionname"
            placeholder="Nom de la promotion" class="form-control input-md"
            required="" value="<?php printf("%s",$promotion["name"]); ?>"
            type="text" disabled>
            <!-- <span class="help-block">Indiquez ici le nom de la promotion</span> -->
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="promotiondelete">Voulez vous supprimer la promotion ?</label>
          <div class="col-md-4">
            <input id="promotiondelete" name="promotiondelete"
            placeholder="Tapez oui pour supprimez" class="form-control input-md"
            required="" value="" type="text">
            <span class="help-block">Indiquez ici votre volonté de suppression</span>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="validate"></label>
          <div class="col-md-4">
            <input type="hidden" name="id" value="<?php printf("%s", $promotion["id"]);?>">
            <button id="validate" name="validate" class="btn btn-primary">Valider</button>
          </div>
        </div>

      </fieldset>
    </form>
  </div>
