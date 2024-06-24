<?php
require_once "Connexion.class.php";
require_once "Editeur.class.php";
require_once "./outil/outils.class.php";

class EditeurDao extends Connexion {
    private static $_instance = null;
    //private $themeDao;
    private function __construct() {  
        //$this->themeDao = ThemeDao::getInstance();
    }
    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new EditeurDao();  
        }
        return self::$_instance;
    }
    public function findAllEditeur(){
        $stmt = $this->getBdd()->prepare(
            "SELECT * FROM editeur");
        $nb = $stmt->execute();
        //echo "nb=".$nb."<br>";
        $editeurListBd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        foreach($editeurListBd as $editeurBd){
            $editeur = new Editeur($editeurBd['nom'], $editeurBd['lien_description']);
            //echo "LivreDao - findAllLivre - l=".$l." livre[idLivre]=".$livre['idLivre']."<br>";
            $editeur->setIdEditeur($editeurBd['idEditeur']);
            $editeurList[]=$editeur;
        }
        return $editeurList;
    }
    function findEditeurByIdEditeur($idEditeur){ 
        //echo "findEditeurByIdEditeur idEditeur=".$idEditeur."<br>";
        $stmt = $this->getBdd()->prepare(
            "SELECT * FROM editeur WHERE idEditeur = :idEditeur");
        $stmt->bindValue(":idEditeur",$idEditeur,PDO::PARAM_INT);
        $nb = $stmt->execute();
        //echo "nb=".$nb."<br>";
        $editeurBd = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();  
        //Outils::afficherTableau($editeurBd, "editeurBd");
        $editeur = new Editeur($editeurBd['nom'], $editeurBd['lien_description']);
        $editeur->setIdEditeur($editeurBd['idEditeur']);
        return $editeur;
    }
    public function creerEditeur($editeur){
        //echo "creerEditeur - auteur=".$editeur."<br>";
        $pdo = $this->getBdd();
        $req = "
            INSERT INTO editeur (nom, lien_description)
            VALUES (:nom, :lienDescription)";
        $stmt = $pdo->prepare($req);
        $stmt->bindValue(":nom",$editeur->getNom(),PDO::PARAM_STR);
        $stmt->bindValue(":lienDescription",$editeur->getLienDescription(),PDO::PARAM_STR);        
        $nb = $stmt->execute();
        //echo "lastInsertId=".$pdo->lastInsertId()."<br>";
        //echo "nb=".$nb."<br>";
        $stmt->closeCursor();
        if($nb > 0){
            return $pdo->lastInsertId();
        }
        return false;
    }
}
