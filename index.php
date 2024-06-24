<?php
require_once "controleur/LivreControleur.class.php";
require_once "outil/Outils.class.php";
require_once "outil/Securite.class.php";
require_once "controleur/UserControleur.class.php";
require_once "controleur/EmpruntControleur.class.php";
require_once "controleur/AuteurEditeurControleur.class.php";
session_start();
$livreController = new LivresController();
$userControleur = new UserControleur();
$empruntController = new EmpruntControleur();   
$AuteurEditeurConroller = new AuteurEditeurControleur();
//Outils::afficherTableau($_SESSION,"SESSION");
//Outils::afficherTableau($_POST,"POST");
try{
    if(empty($_GET['action']) || !isset($_GET['action'])){
        $livreController->afficherAccueil();
    }
    else switch ($_GET['action']){
        case "afficher-catalogue": $livreController->afficherCatalogue();
        break;
        case "afficher-livre": $livreController->afficherLivre($_GET['id']);
        break;
        case "creer-abonne": $userControleur->creerCompteAbonne();
        break;
        case "creer-abonne-validation": $userControleur->creerAbonneValidation($_POST['login'], $_POST['mail'],$_POST['passwd']);
        break;
        case "valider-abonne": $userControleur->recevoirMailAbonneValidation($_GET['login'],$_GET['cle']);
        break;
        case "login": $userControleur->login();
        break;
        case "login-validation": $userControleur->loginValidation($_POST['login'], $_POST['password']);
        break;
        case "afficher-profil": $userControleur->afficherProfil();
        break;
        case "supprimer-abonne": $userControleur->supprimerCompteAbonne();
        break;
        case "logout":  $userControleur->logout();
        break;
        case "afficher-panier":  $livreController->afficherPanierEmprunt();
        break;
        case "ajouter-livre-panier":  $livreController->ajouerterLivrePanier($_GET['id']);
        break;
        case "supprimer-livre-panier":  $livreController->supprimerLivrePanier($_GET['id']);
        break; 
        case "valider-panier":  $empruntController->validerPanierEmprunt();
        break;
        case "lister-emprunt-livre":  $empruntController->listerEmpruntLivre();
        break;
        case "retourner-emprunt-livre":  $empruntController->retournerLivreEmprunt($_GET['idEmprunt'], $_GET['idLivre']);
        break;
        case "afficher-historique-emprunt": $empruntController->afficherHistoriqueEmprunt();
        break;
        case "administrer-livre":  $livreController->administrerLivres();
        break;
        case "supprimer-livre":  $livreController->supprimerLivre($_GET['id']);
        break;
        case "modifier-livre": $livreController->modifierLivre($_GET['id']);
        break;
        case "modifier-livre-validation": $livreController->modifierLivreValidation($_POST['id'],$_POST['titre'],$_POST['nb'],$_POST['nbPages'],$_POST['descr'],$_POST['image']);
        break;
        case "creer-livre": $livreController->creerLivre();
        break;
        case "creer-livre-validation": $livreController->creerValidationLivre($_POST['titre'],$_POST['nb'],$_POST['nbPages'],$_POST['descr']);
        break;
        case "administrer-utilisateur": $userControleur->administrerUtilisateur();
        break;
        case "supprimer-user": $userControleur->supprimerUser($_GET['user']);
        break;
        case "mentions-legales": require "vue/mentionLegale.view.php";
        break;
        case "cookies": require "vue/cookies.view.php";
        break;
        case "donnees-personnelles": require "vue/donneesPersonnelles.view.php";
        break;
        case "afficher-auteur": $AuteurEditeurConroller->lireAuteur($_GET['idAuteur']);
        break;
        case "gerer-auteur": $AuteurEditeurConroller->gererAllAuteur();
        break;
        case "creer-auteur-validation": $AuteurEditeurConroller->creerAuteurValidation();
        break;
        case "gerer-editeur": $AuteurEditeurConroller->gererAllEditeur();
        break;
        case "creer-editeur-validation": $AuteurEditeurConroller->creerEditeurValidation();
        break;
        default: throw new Exception("La page n'existe pas");
    }
}catch(Exception $e){
    $title = "Erreur";
    $erreurMsg = $e->getMessage();
    require "vue/erreur.view.php";
}
?>