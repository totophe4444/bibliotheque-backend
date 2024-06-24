<?php ob_start()?>
<?php //require_once "model/LivreManager.php"; ?>
<?php //afficherTableau($tabLivres,"tabLivres"); ?>

<div class="container">
    
           <form action="index.php?action=creer-editeur-validation" method="post">
            <div class="form-group">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
              <label for="bibliographie" class="form-label">Lien description</label>
              <input type="text" class="form-control" id="nom" name="lien">
            <div class="form-group">           
            <button type="submit" class="btn btn-primary">créer</button>
          </form>
    
    <table class="table table-striped">
      <thead>
        <tr>
        <th scope="col">IdEditeur</th>
          <th scope="col">Nom</th>
          <th scope="col">lien</th>
          <th scope="col" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($editeurList as $editeur) { ?>
          <tr class="align-middle">
            <td scope="row"><?php echo $editeur->getIdEditeur(); ?></td>
            <td><?php echo $editeur->getNom(); ?></td>
            <td><?php echo Outils::sousChaineTaille($editeur->getLienDescription(),40); ?></td>
            <td><a href="<?= $editeur->getLienDescription(); ?>" class="btn btn-info">Lire</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table> 
</div> 
<?php
    $content=ob_get_clean();
    $titre = "Administrer la liste d'auteurs";
    require "template.view.php";
?>