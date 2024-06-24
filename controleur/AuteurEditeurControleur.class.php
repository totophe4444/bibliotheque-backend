<?php
require_once "model/LivreDao.class.php"; 
require_once "./outil/Outils.class.php";

class AuteurEditeurControleur {
    private $livreDao;
    private $auteurDao;
    private $editeurDao;

    public function __construct(){
        $this->livreDao = LivreDao::getInstance();
        $this->auteurDao = AuteurDao::getInstance();
        $this->editeurDao = EditeurDao::getInstance();
    }
    public function lireAuteur($idAuteur){
        $auteur = $this->auteurDao->findAuteurByIdAuteur($idAuteur);
        $livreList = $this->livreDao->findAllLivreByIdAuteur($idAuteur);
        require "vue/afficherAuteur.view.php";
    }
    public function gererAllAuteur(){
        //echo "StockControleur - gererAllAuteur<br>";
        $auteurList = $this->auteurDao->findAllAuteur();
        //Outils::afficherListObjet($auteurList, "ateurList");
        require "vue/gererAuteur.view.php";
    }
    public function creerAuteurValidation(){
        //Outils::afficherTableau($_POST, "_POST");
        $auteur = new Auteur($_POST['nom'], $_POST['bibliographie']);
        echo "auteur=".$auteur."<br>";
        $this->auteurDao->creerAuteur($auteur);
        $this->gererAllAuteur(); 
    }
    public function gererAllEditeur(){
        //echo "StockControleur - gererAllAuteur<br>";
        $editeurList = $this->editeurDao->findAllEditeur();
        //Outils::afficherListObjet($auteurList, "ateurList");
        require "vue/gererEditeur.view.php";
    }
    public function creerEditeurValidation(){
        //Outils::afficherTableau($_POST, "_POST");
        $editeur = new Editeur($_POST['nom'], $_POST['lien']);
        echo "editeur=".$editeur."<br>";
        $this->editeurDao->creerEditeur($editeur);
        $this->gererAllEditeur(); 
    }
}
