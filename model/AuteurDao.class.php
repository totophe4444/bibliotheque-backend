<?php
require_once "Connexion.class.php";
require_once "Auteur.class.php";
require_once "./outil/outils.class.php";

class AuteurDao extends Connexion {
    private static $_instance = null;
    //private $themeDao;
    private function __construct() {  
        //$this->themeDao = ThemeDao::getInstance();
    }
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new AuteurDao();  
        }
        return self::$_instance;
    }
    public function findAllAuteur(){
        $stmt = $this->getBdd()->prepare(
            "SELECT * FROM auteur");
        $nb = $stmt->execute();
        //echo "nb=".$nb."<br>";
        $auteurListBd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        foreach($auteurListBd as $auteurBd){
            $auteur = new Auteur($auteurBd['nom'], $auteurBd['bibliographie']);
            //echo "LivreDao - findAllLivre - l=".$l." livre[idLivre]=".$livre['idLivre']."<br>";
            $auteur->setIdAuteur($auteurBd['idAuteur']);
            $auteurList[]=$auteur;
        }
        return $auteurList;
    }
    function findAuteurByIdAuteur($idAuteur){ 
        //echo "idAuteur=".$idAuteur."<br>";
        $stmt = $this->getBdd()->prepare(
            "SELECT * FROM auteur WHERE idAuteur = :idAuteur");
        $stmt->bindValue(":idAuteur",$idAuteur,PDO::PARAM_INT);
        $nb = $stmt->execute();
        //echo "nb=".$nb."<br>";
        $auteurBd = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();  
        //Outils::afficherTableau($auteurBd, "findAuteurByIdAuteur auteurBd");
        $auteur = new Auteur($auteurBd['nom'], $auteurBd['bibliographie']);
        $auteur->setIdAuteur($auteurBd['idAuteur']);
        return $auteur;
    }
    public function creerAuteur($auteur){
        echo "creerAuteur - auteur=".$auteur."<br>";
        $pdo = $this->getBdd();
        $req = "
            INSERT INTO auteur (nom, bibliographie)
            VALUES (:nom, :bibliographie)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nom",$auteur->getNom(),PDO::PARAM_STR);
        $stmt->bindValue(":bibliographie",$auteur->getBibliographie(),PDO::PARAM_STR);        
        $nb = $stmt->execute();
        echo "lastInsertId=".$pdo->lastInsertId()."<br>";
        echo "nb=".$nb."<br>";
        $stmt->closeCursor();
        if($nb > 0){
            return $pdo->lastInsertId();
        }
        return false;
    }
    
}
