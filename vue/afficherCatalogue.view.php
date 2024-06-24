<?php 
  require_once "outil/Outils.class.php"; 
  ob_start(); 
?>
<?php if($alert !== ""){ ?>
    <div class="alert alert-danger" role="alert">
        <?= $alert ?>
    </div>              
<?php } else { ?>
  <div class="row">
    <?php $i=0; ?>
    <?php foreach($livres as $livre) { ?>
      <?php $i++; ?>
      <div class="col-3">
        <div class="card p-1 m-1" style="width: 18rem;">
          <img height="300px" src="public/images/<?php echo $livre->getImage(); ?>" class="card-img-top" alt="image">
          <div class="card-body">
            <h5 class="card-title"><?php echo Outils::sousChaineTaille($livre->getTitre(), 18); ?></h5>
            <p class="card-text"><?php echo Outils::sousChaineTaille($livre->getDescription(),50); ?></p>
            <p class="card-text"><?php echo Outils::sousChaineTaille($livre->getNb()." disponible",50); ?></p>
            <p><a href="index.php?action=afficher-auteur&idAuteur=<?php echo $livre->getAuteur()->getIdAuteur(); ?>"><?= $livre->getAuteur()->getNom(); ?></a></p>
            <a href="index.php?action=afficher-livre&id=<?php echo $livre->getid(); ?>" class="btn btn-primary">Détail</a>
            <?php if(Securite::isConnected()){ ?>
                <?php if($livre->getNb()>0){ ?>
                <a href="index.php?action=ajouter-livre-panier&id=<?php echo $livre->getid(); ?>" class="btn btn-success">Emprunter</a>
                <?php } ?>
            <?php } ?>
          </div>
        </div>
      </div>
    <?php } ?>
    <?php if($i == count($livres) and $i % 4 != 0) { ?>
        <div class="col-3"></div>          
    <?php } ?>  
  </div>
<?php } ?> 
<?php
$content = ob_get_clean();
$titre = "Catalogue";
require "template.view.php";
?>  