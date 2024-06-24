<?php
require_once "model/LivreDao.class.php"; 
require_once "./outil/Outils.class.php";
require_once "model/EmpruntDao.class.php"; 
require_once "model/Emprunt.class.php"; 

class LivresController{
    private $livreDao;
    private $empruntDao;
    private $auteurDao;
    private $editeurDao;

    public function __construct(){
        $this->livreDao = LivreDao::getInstance();
        $this->empruntDao = EmpruntDao::getInstance();
        $this->auteurDao = AuteurDao::getInstance();
        $this->editeurDao = EditeurDao::getInstance();
    }
    function afficherAccueil(){
        require "vue/accueil.view.php";
    }
    function afficherCatalogue(){
        $alert = "";
        $livres=$this->livreDao->findAllLivre();
        require "vue/afficherCatalogue.view.php";
    }
    function afficherLivre($id){
        $livre=$this->livreDao->findOneLivreById($id);
        require "vue/afficherlivre.view.php";
    }
    function afficherPanierEmprunt(){
        $alert="";
        if(isset($_SESSION['livres'])){   
            foreach($_SESSION['livres'] as $id){
                $livres[]=$this->livreDao->findOneLivreById($id);
            }
        }
        if(!isset($livres) || empty($livres)){
            $alert="Votre panier est vide, sélectionnez en dans le catalogue";
        }
        require "vue/afficherPanierEmprunt.view.php";
    }
    function supprimerLivre($id){ 
        if(Securite::verifAccessAdmin()){           
            if(!$this->empruntDao->isExistEmpruntByIdLivre($id)){
                $nomImage = $this->livreDao->findOneLivreById($id)->getImage();
                $this->livreDao->supprimerLivre($id);
                unlink("public/images/".$nomImage);
                header("Location: index.php?action=administrer-livre");
            }    
            else throw new Exception("Impossible de supprimer le livre car des emprunts y font référence");
        }
        else throw new Exception("Vous n'avez pas les droit nécessaires");
    }
    function creerLivre(){ // Tester les droits
        if(Securite::verifAccessAdmin()){
            $auteurList = $this->auteurDao->findAllAuteur();
            $editeurList = $this->editeurDao->findAllEditeur();
            require "vue/creerlivre.view.php";
        }
        else throw new Exception("Vous n'avez pas le droit d'accéder à cette page");
    }
    function creerValidationLivre($titre,$nb,$nbPage,$description){ // Tester les droits
        if(Securite::verifAccessAdmin()){
            $file = $_FILES['image'];
            $repertoire = "public/images/";
            $nomImageAjoute = Outils::ajouterImage($file,$repertoire);
            $this->livreDao->creerLivre($titre,$nb,$nbPage,$nomImageAjoute,$description);
            header("Location: index.php?action=administrer-livre");
        }
        else throw new Exception("Vous n'avez pas les droit nécessaires");
    }
    function afficherCardLivres(){
        $livres=$this->livreDao->lireLivres();
        require "vue/cardLivres.view.php";
    }
    function modifierLivre($id){ // Tester les droits
        if(Securite::verifAccessAdmin()){
            //echo "Modifier LIVRE id=".$id."<br>";
            $livre=$this->livreDao->findOneLivreById($id);
            require "vue/modifierLivre.view.php";
        }
        else throw new Exception("Vous n'avez pas le droit d'accéder à cette page");
    }
    function modifierLivreValidation($id,$titre,$nb,$nbPage,$description,$image){ // Tester les droits
        if(Securite::verifAccessAdmin()){
            Outils::afficherTableau($_POST,"POST");
            // echo "Modifier VALIDATION LIVRE id<br>";
            $repertoire = "public/images/";
            $nomImageAjoute = $image;
            $file = $_FILES['image'];
            Outils::afficherTableau($file,"file");
            $repertoire = "public/images/";
            if($_FILES['image']['size'] > 0){
                unlink($repertoire.$nomImageAjoute);
                $nomImageAjoute = Outils::ajouterImage($file,$repertoire);
            }
            
            $livres=$this->livreDao->modifierLivre($id,$titre,$nb,$nbPage,$nomImageAjoute,$description);
            header("Location: index.php?action=administrer-livre");
        }
        else throw new Exception("Vous n'avez pas les droit nécessaires");
    }
    function ajouerterLivrePanier($id){ // ajout exception 
        $alert="";
        if(!isset($_SESSION['livres'])){
            $_SESSION['livres'] = array();
        }
        if(in_array($id, $_SESSION['livres'])){
            echo $id." est déjà commander<br>";
            throw new Exception("Vous avez déjà commander ce livre");
        }
        else {
            $_SESSION['livres'][]=$id;
        }
        Outils::afficherTableau($_SESSION['livres'],"SESSION['livres']");
        header("Location: index.php?action=afficher-catalogue");
    }
    function supprimerLivrePanier($id){
        for ($i = 0; $i < count($_SESSION['livres']); $i++){
            if($_SESSION['livres'][$i] == $id){
                unset($_SESSION['livres'][$i]);
            } 
        }
        header("Location: index.php?action=afficher-panier");
    }
    function administrerLivres(){
        $tabLivres=$this->livreDao->findAllLivre();
        require "vue/administrerLivres.view.php";
    }
}
?>