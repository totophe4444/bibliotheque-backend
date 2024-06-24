<?php ob_start()?>
<?php //require_once "model/LivreDao.php"; ?>
<?php //afficherTableau($tabLivres,"tabLivres"); ?>

<form action="index.php?action=rechercher-requete" method="post">
    <div class="row">
    <div class="col-2">Titre</div>
    <div class="col-4">Description</div>
    </div>
    <div class="row">
    <div class="col-2"><input type="text" class="form-control" id="titre" name="titre"></div>
    <div class="col-4"><input type="text" class="form-control" id="description" name="description"></div>
    </div>
     
   <button type="submit" class="btn btn-primary">Submit</button>
    
</form>
<?php
    $content=ob_get_clean();
    $titre = "Recherche avancée";
    require "template.view.php";
?>