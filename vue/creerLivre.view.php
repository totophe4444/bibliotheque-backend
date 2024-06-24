<?php 
ob_start(); 
?>
<div class="container">
    <div class="row">
        <div class="col-6 text-center">
            <a href="index.php?action=gerer-auteur" class="btn btn-primary">Gérer auteur</a>
        </div>
        <div class="col-6 text-center">
            <a href="index.php?action=gerer-editeur" class="btn btn-primary">Gérer éditeur</a>
        </div>
    </div>
    <form method="POST" action="index.php?action=creer-livre-validation" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label" for="titre">Titre : </label>
        <input class="form-control" type="text" id="titre" name="titre">
      </div>
      <div class="mb-3">
        <label class="form-label" for="nb">Nombre exemplaire : </label>
        <input class="form-control" type="number" id="nb" name="nb">
      </div>
      <div class="mb-3">
        <label class="form-label" for="nbPages">Nombre de pages : </label>
        <input class="form-control" type="number" id="nbPages" name="nbPages">
      </div>
      <div class="mb-3">
        <label class="form-label" for="descr">Description : </label>
        <input class="form-control" type="text" id="descr" name="descr">
      </div>
      <div class="mb-3">
        <label class="form-label" for="image">Image : </label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <div class="mb-3">
          <label for="auteur" class="form-label">Auteur</label>
          <select id="auteur" class="form-control" name="idAuteur" >
              <?php foreach($auteurList as $auteur) { ?>
                <option value="<?php echo $auteur->getIdAuteur(); ?>"><?php echo $auteur->getNom(); ?></option>
              <?php } ?>                      
          </select>
      </div>  
      <div class="mb-3">
          <label for="editeur" class="form-label">Editeur</label>
          <select id="editeur" class="form-control" name="idEditeur" >
              <?php foreach($editeurList as $editeur) { ?>
                <option value="<?php echo $editeur->getIdEditeur(); ?>"><?php echo $editeur->getNom(); ?></option>
              <?php } ?>                      
          </select>
      </div>    
      <input class="btn btn-primary" type="submit" value="ajouter" name="form_ajouter"/> 
</form>
<?php
$content = ob_get_clean();
$titre = "Ajout d'un livre";
require "template.view.php";
?>