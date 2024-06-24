<?php

class Emprunt {
    private $idEmprunt;
    private $idLivre;
    private $login;
    private $datePret;
    private $dateRetour;
    private $titreLivre; // afficher le titre du livre
    function __construct($idLivre, $login) {
        $this->idLivre= $idLivre;
        $this->login = $login;
        //$this->datePret = date('Y-m-d');
        $this->datePret = date('Y-m-d H:i:s');
    }
    public function __toString() {
        return $this->idEmprunt." ".$this->idLivre." ".$this->login." ".$this->datePret." ".$this->titreLivre." ".$this->dateRetour." "."<br>";
    }
    function getTitreLivre() {
        return $this->titreLivre;
    }

    public function setTitreLivre($titreLivre): void {
        $this->titreLivre = $titreLivre;
    }

    function getIdEmprunt() {
        return $this->idEmprunt;
    }

    function setIdEmprunt($idEmprunt): void {
        $this->idEmprunt = $idEmprunt;
    }

    function getIdLivre() {
        return $this->idLivre;
    }

    function getLogin() {
        return $this->login;
    }

    function getDatePret() {
        return $this->datePret;
    }

    function getDateRetour() {
        return $this->dateRetour;
    }

    function setIdLivre($idLivre): void {
        $this->idLivre = $idLivre;
    }

    function setLogin($login): void {
        $this->login = $login;
    }

    function setDatePret($datePret): void {
        $this->datePret = $datePret;
    }

    function setDateRetour($dateRetour): void {
        $this->dateRetour = $dateRetour;
    }
}

