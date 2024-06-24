<?php 
ob_start(); 
?>
<div class="container">
    <form method="POST" action="index.php?page=livres&action=modifier-livre-validation" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="titre">Titre : </label>
        <input class="form-control" type="text" id="titre" name="titre" value="<?= $livre->getTitre() ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="nb">Nombre d'exemplaires : </label>
        <input class="form-control" type="number" id="nb" name="nb" value="<?= $livre->getNb() ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="nbPages">Nombre de pages : </label>
        <input class="form-control" type="number" id="nbPages" name="nbPages" value="<?= $livre->getNbPages() ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="descr">Description : </label>
        <input class="form-control" type="text" id="descr" name="descr" value="<?= $livre->getDescription() ?>">
      </div>
      <img width="200px" src="public/images/<?php echo $livre->getImage(); ?>">
      <div class="mb-3">
        <label class="form-label" for="image">Image : </label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
        <input type="hidden" name="id" value="<?= $livre->getId() ?>">
        <input type="hidden" name="image" value="<?= $livre->getImage() ?>">
      <input class="btn btn-primary" type="submit" value="modifier" name="form_ajouter"/> 
</form>
<?php
$content = ob_get_clean();
$titre = "Modifier le livre";
require "template.view.php";
?>