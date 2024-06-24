<?php ob_start()?>
<?php //require_once "model/LivreManager.php"; ?>
<?php //afficherTableau($tabLivres,"tabLivres"); ?>

<div class="container">
    
           <form action="index.php?action=creer-auteur-validation" method="post">
            <div class="form-group">
              <label for="nom" class="form-label">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
              <label for="bibliographie" class="form-label">Bibliographie</label>
              <textarea name="bibliographie" rows="6" class="form-control" placeholder="Saisir la bibliographie de l'auteur."></textarea><br>
            <div class="form-group">           
            <button type="submit" class="btn btn-primary">créer</button>
          </form>
    
    <table class="table table-striped">
      <thead>
        <tr>
        <th scope="col">IdAuteur</th>
          <th scope="col">Nom</th>
          <th scope="col">Bibliographie</th>
          <th scope="col" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($auteurList as $auteur) { ?>
          <tr class="align-middle">
            <td scope="row"><?php echo $auteur->getIdAuteur(); ?></td>
            <td><?php echo $auteur->getNom(); ?></td>
            <td><?php echo Outils::sousChaineTaille($auteur->getBibliographie(),40); ?></td>
            <td><a href="index.php?action=afficher-auteur&idAuteur=<?= $auteur->getIdAuteur(); ?>" class="btn btn-info">Lire</a></td>
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