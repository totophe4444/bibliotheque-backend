<?php ob_start()?>
<?php //require_once "model/LivreDao.php"; ?>
<?php //afficherTableau($tabLivres,"tabLivres"); ?>

<div class="container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Nom utilisateur</th>
          <th scope="col">Mail</th>
          <th scope="col">Rôle</th>
          <th scope="col">Valide</th>
          <th scope="col">Mot de passe hashé</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($users as $user) { ?>
          <tr class="align-middle">
            <td><?php echo $user->getLogin(); ?></td>
            <td><?php echo $user->getMail(); ?></td>
            <td><?php echo $user->getRole(); ?></td>
            <td><?php echo $user->getEstValide(); ?></td>
            <td><?php echo $user->getPassword(); ?></td>
            <td>
                <?php if($user->getRole() == "abonne"){ ?>
                <a href="index.php?action=supprimer-user&user=<?= $user->getLogin(); ?>" class="btn btn-danger">Supprimer</a>
                <?php } ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table> 
</div> 
<?php
    $content=ob_get_clean();
    $titre = "Administrer utilisateur";
    require "template.view.php";
?>