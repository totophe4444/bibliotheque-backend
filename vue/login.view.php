<?php 
ob_start(); 
?>
<?php if($alert !== ""){ ?>
    <div class="alert alert-danger" role="alert">
        <?= $alert ?>
    </div>              
<?php } ?>
    <h3>Formulaire login</h3>
    <form action="index.php?action=login-validation" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Nom utilisateur</label>
            <input type="text" class="form-control" id="username" name="login">
        </div>
        <div class="mb-3">
            <label for="passwd" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="passwd" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php
$content = ob_get_clean();
$titre = "Se logger";
require "template.view.php";
?>

