<?php
    require_once "outil/Securite.class.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" />
    <title><?php echo $titre ?></title>
</head>
<body >
<div class="container">
    <h1 class="relief">Bibliothéque pour jeunes enfants</h1>
    <h1 class="relief">Un ancien qui meure, est une bibliothèque qui brûle<h1>
</div>
    <!-- https://getbootstrap.com/docs/5.1/components/navs-tabs/ -->
    <div class="container">
        <div class="row">
            <div class="col-11">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=afficher-catalogue">Catalogue</a> <?php // Ne pas permettre d'emprunter ?>
                    </li>
                    <?php if(Securite::isConnected()){ // si connecté ?>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=afficher-panier">Panier</a> <?php // Accessible aux abonnées et administrateur ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=lister-emprunt-livre">Emprunts</a> <?php // Accessible aux abonnées et administrateur ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=afficher-profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=afficher-historique-emprunt">Historique</a>
                        </li>
                    <?php } ?>    
                    <?php if(!Securite::isConnected()){ // si non connecté ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=creer-abonne">Créer compte</a>
                    </li>
                    <?php } ?>
                    <?php if(Securite::verifAccessAdmin()){ ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=administrer-livre">Aministration livre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=creer-livre">Créer livre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=administrer-utilisateur">administrer utilisateur</a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-1 text-right">
                <?php if(Securite::isConnected()){ // Ajout possibilité de se logger ?>
                    <a class="nav-link text-center" href="index.php?action=logout">logout</a>
                <?php } else { ?>
                    <a class="nav-link text-center" href="index.php?action=login">login</a>
                <?php } ?>    
            </div>
       </div>
    </div>            
            
    <div class="container">
        <h2><?php echo $titre ?></h2>
        <?php echo $content ?>
    </div>
   
    <div class="container">

    <footer>
        <h6>Copyright perroquet - Tous droits réservés</h6>
        <p class="text-center">
            <a href="index.php?action=mentions-legales">Mentions légales</a>
            <a href="index.php?action=cookies">Cookies</a>
            <a href="index.php?action=donnees-personnelles">Données personnelles</a>
        </p>
    </footer>
    </div>
    
    <!-- script src="http://localhost/bdd/biblio-etape3-02/public/javascript/script.js"></script -->
</body>
</html>