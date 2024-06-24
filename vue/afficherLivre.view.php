<?php 
ob_start(); 
?>
<br>
<div class="row">
    <div class="col-4">
        <img  style="width:80%; height:auto" src="public/images/<?= $livre->getImage(); ?>">
    </div>
    <div class="col-8">
        <br>
        <h3>Nombre de pages : <?= $livre->getNbPages(); ?></h3>
        <br>
        <h3>Nombre d'exemplaire disponible : <?= $livre->getNb(); ?></h3>
        <br>
        <h3>Description :</h3> 
        <p><?= $livre->getDescription(); ?></p>
        <h3>Auteur :</h3> 
        <?php $auteur = $livre->getAuteur(); ?>
        <?php if(isset($auteur)) { ?>
        <h5><a href="index.php?action=afficher-auteur&idAuteur=<?php echo $auteur->getIdAuteur(); ?>"><?= $auteur->getNom(); ?></a></h5> 
            
        <?php } else { ?>
            <h4>Auteur inconnu</h4>
        <?php } ?>
        
        <h3>Editeur :</h3> 
        <?php $editeur = $livre->getEditeur(); ?>
        <?php if(isset($editeur)) { ?>
        <h5><a href="<?php echo $editeur->getLienDescription(); ?>"><?php echo $editeur->getNom() ; ?></a></h5> 
        <?php } else { ?>
            <h4>Editeur inconnu</h4>
        <?php } ?>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $livre->getTitre();
require "template.view.php";
?>