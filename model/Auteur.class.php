<?php

class Auteur implements JsonSerializable {
    private $idAuteur;
    private $nom;
    private $bibliographie;
    function __construct($nom, $bibliographie) {
        $this->nom = $nom;
        $this->bibliographie = $bibliographie;
    }
    public function __toString() {
        return $this->idAuteur." ".$this->nom/*." ".$this->bibliographie.*/;
    }
    public function jsonSerialize() {
        return [
            'id' => $this->idAuteur,
            'nom' => $this->nom,
            'bibliographie' => $this->bibliographie
        ];
    }
    function getIdAuteur() {
        return $this->idAuteur;
    }

    function getNom() {
        return $this->nom;
    }

    function getBibliographie() {
        return $this->bibliographie;
    }

    function setIdAuteur($idAuteur): void {
        $this->idAuteur = $idAuteur;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setBibliographie($bibliographie): void {
        $this->bibliographie = $bibliographie;
    }
}