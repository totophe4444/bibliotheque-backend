<?php 
ob_start(); 
?>
<?php if($alert !== ""){ ?>
    <div class="alert alert-danger" role="alert">
        <?= $alert ?>
    </div>              
<?php } else { ?>
<br>
    <table class="table table-striped">
      <thead>
        <tr>
        
          <th scope="col">Image</th>
          <th scope="col">Titre</th>
          
          <th scope="col">Nombre de pages</th>
          <th scope="col" colspan="3">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($livres as $livre) { ?>
          <tr class="align-middle">
            
            <td><img width="80" src="public/images/<?php echo $livre->getImage(); ?>"></td>
            <td><?php echo $livre->getTitre(); ?></td>
            
            <td><?php echo $livre->getNbPages(); ?></td>
            <td><a href="index.php?action=afficher-livre&id=<?php echo $livre->getid(); ?>" class="btn btn-info">Lire</a></td>
            <td><a href="index.php?action=supprimer-livre-panier&id=<?= $livre->getId(); ?>" class="btn btn-danger">Supprimer du panier</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="index.php?action=valider-panier" class="btn btn-success">Valider le panier</a><br><br>
<?php } ?>     
<?php
$content = ob_get_clean();
$titre = "Panier" ;
require "template.view.php";
?>