<?php 
ob_start(); 
?>
<br>
<div class="row">
    <div class="col-12">
        <br>
        <h3>Nom : <?= $auteur->getNom(); ?></h3>
        <br>
        <h3>Description :</h3> 
        <p><?= $auteur->getBibliographie(); ?></p>
        <br>
    </div>  
</div>

<?php if(isset($livreList) && !empty($livreList)) { ?>
<h3>Livres écrits par l'auteur :</h3> 
<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
        <th scope="col">IdLivre</th>
          <th scope="col">Image</th>
          <th scope="col">Titre</th>
          <th scope="col">Nombre exemplaire disponible</th>
          <th scope="col">Nombre de pages</th>
          <th scope="col" colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($livreList as $livre) { ?>
          <tr class="align-middle">
            <td scope="row"><?php echo $livre->getId(); ?></td>
            <td><img width="80" src="public/images/<?php echo $livre->getImage(); ?>"></td>
            <td><?php echo $livre->getTitre(); ?></td>
            <td><?php echo $livre->getNb(); ?></td>
            <td><?php echo $livre->getNbPages(); ?></td>
            <td><a href="index.php?action=afficher-livre&id=<?= $livre->getId(); ?>" class="btn btn-info">Lire</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table> 
</div> 
<?php } ?>
<?php
$content = ob_get_clean();
$titre = "Auteur";
require "template.view.php";
?>