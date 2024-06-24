<?php ob_start()?>
<?php //require_once "model/LivreDao.php"; ?>
<?php //afficherTableau($tabLivres,"tabLivres"); ?>

<div class="container">
    <div class="row">
        <div class="col-6 text-center">
            <a href="index.php?action=gerer-auteur" class="btn btn-primary">Gérer auteur</a>
        </div>
        <div class="col-6 text-center">
            <a href="index.php?action=gerer-editeur" class="btn btn-primary">Gérer éditeur</a>
        </div>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
        <th scope="col">Id</th>
          <th scope="col">Image</th>
          <th scope="col">Titre</th>
          <th scope="col">Disponible</th>
          <th scope="col">Nombre de pages</th>
          <th scope="col" colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($tabLivres as $livre) { ?>
          <tr class="align-middle">
            <td scope="row"><?php echo $livre->getId(); ?></td>
            <td><img width="80" src="public/images/<?php echo $livre->getImage(); ?>"></td>
            <td><?php echo $livre->getTitre(); ?></td>
            <td><?php echo $livre->getNb(); ?></td>
            <td><?php echo $livre->getNbPages(); ?></td>
            <td><a href="index.php?action=afficher-livre&id=<?= $livre->getId(); ?>" class="btn btn-info">Afficher détail</a></td>
            <td><a href="index.php?action=modifier-livre&id=<?= $livre->getId(); ?>" class="btn btn-warning">Modifier</a></td>
            <td><a href="index.php?action=supprimer-livre&id=<?= $livre->getId(); ?>" class="btn btn-danger">Supprimer</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table> 
</div> 
<?php
    $content=ob_get_clean();
    $titre = "Administrer les livres";
    require "template.view.php";
?>