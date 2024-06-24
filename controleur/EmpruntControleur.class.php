<?php
require_once "model/LivreDao.class.php"; 
require_once "./outil/Outils.class.php";
require_once "model/EmpruntDao.class.php"; 
require_once "model/Emprunt.class.php"; 

class EmpruntControleur {
    private $empruntDao;
    private $livreDao;
    
    public function __construct(){
        $this->empruntDao = EmpruntDao::getInstance();
        $this->livreDao = LivreDao::getInstance();
    }
    public function validerPanierEmprunt(){
        echo date('Y-m-d H:i:s');
        if(isset($_SESSION['livres'])){
            $login = $_SESSION['login'];
            foreach ($_SESSION['livres'] as $idLivre) {
                $emprunt = new Emprunt($idLivre, $login);
                $emprunt = $this->empruntDao->creerEmprunt($emprunt);
                $this->livreDao->decrementerNbLivre($idLivre);
            }
            unset($_SESSION['livres']);
            header("Location: index.php?action=lister-emprunt-livre");
        }
        else {
            header("Location: index?action=afficher-catalogue");
        }
    }
    public function listerEmpruntLivre(){
        $alert="";
        $empruntList = $this->empruntDao->findAllEmpruntByLogin($_SESSION['login']);
        //afficherTableau($empruntList, "empruntList");
        if(isset($empruntList) && !empty($empruntList)){
            require "vue/listerEmpruntLivre.view.php";
        }
        else {
            $alert="Vous n'avez pas de livre en attente de retour";
            require "vue/listerEmpruntLivre.view.php";
        }
    }
    public function retournerLivreEmprunt($idEmprunt, $idLivre){
        //echo "retourLivreEmprunt idEmprunt = ".$idEmprunt."<br>";
        $this->empruntDao->setDateRetour($idEmprunt);
        $this->livreDao->incrementerNbLivre($idLivre);
        header("Location: index.php?action=lister-emprunt-livre");
    }
    public function afficherHistoriqueEmprunt(){
        //echo "retourLivreEmprunt idEmprunt = ".$idEmprunt."<br>";
        $alert="";
        $empruntHistoriqueList = $this->empruntDao->findAllEmpruntHistoriqueByLogin($_SESSION['login']);
        if(!isset($empruntHistoriqueList) || empty($empruntHistoriqueList)){
            $alert="Votre historique de livre emprunté est vide";
        }
        require "vue/afficherHistorique.view.php";
    }
    
}

