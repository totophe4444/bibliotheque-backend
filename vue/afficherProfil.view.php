<?php ob_start()?>
<?php require_once "outil/Securite.class.php"; ?>
<div class="text-center">
    <h1 class="text-center">Profil de <?= $user->getLogin(); ?></h1>
    <br>
    <h4>role : <?= $user->getRole(); ?></h4>
    <br>
    <div>
        <div>
            <img width="100px" src="public/images/<?= $user->getImage();  ?>" alt="photo de profil" />
        </div>
        <form method="POST" action="index.php?action=modifier-image" enctype="multipart/form-data">
            <label for="image">Changer l'image de profil </label><br />
            <input type="file" class="form-control-file" id="image" name="image" onchange="submit();" />
        </form>
    </div>
    <br>      
    <h4>Votre mail</h4>
    <?= $user->getMail(); ?>    
    <br><br>
    <?php if(Securite::verifAccessAbonne()){ ?>
    <div class="mb-3">
        <a href="index.php?action=supprimer-abonne" class="btn btn-danger">Supprimer votre compte</a>
    </div>
    <?php } ?>
</div>
<?php
    $content=ob_get_clean();
    $titre = "Profil";
    require "template.view.php";
?>