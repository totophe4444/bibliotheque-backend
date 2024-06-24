<?php 
ob_start(); 
?>
        <form action="index.php?action=creer-abonne-validation" method="post">
            <div class="mb-3">
              <label for="username" class="form-label">Nom utilisateur</label>
              <input type="text" class="form-control" id="username" name="login">
            </div>
            <div class="mb-3">
              <label for="passwd" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="passwd" name="passwd">
            </div>
            <!-- version 3-01 -->
            <div class="mb-3">
                <label for="mail" class="form-label">mail</label>
                <input type="mail" class="form-control" id="mail" name="mail" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
<?php
$content = ob_get_clean();
$titre = "Créer compte abonné";
require "template.view.php";
?>

