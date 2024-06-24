<?php

class Editeur {
    private $idEditeur;
    private $nom;
    private $lienDescription;
    function __construct($nom, $lienDescription) {
        $this->nom = $nom;
        $this->lienDescription = $lienDescription;
    }
    public function __toString() {
        return $this->idEditeur." ".$this->nom./*" ".$this->lienDescription.*/"<br>";
    }

    function getIdEditeur() {
        return $this->idEditeur;
    }

    function getNom() {
        return $this->nom;
    }

    function getLienDescription() {
        return $this->lienDescription;
    }

    function setIdEditeur($idEditeur): void {
        $this->idEditeur = $idEditeur;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setLienDescription($lienDescription): void {
        $this->lienDescription = $lienDescription;
    }
}