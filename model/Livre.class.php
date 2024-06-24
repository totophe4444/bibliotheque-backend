<?php
class Livre implements JsonSerializable {
    private $id;
    private $titre;
    private $nb;
    private $nbPages;
    private $image;
    private $description;
    private $auteur;
    private $editeur;

    function __construct($id, $titre, $nb, $nbPages, $image, $description) {
        $this->id = $id;
        $this->titre = $titre;
        $this->nb = $nb;
        $this->nbPages = $nbPages;
        $this->image = $image;
        $this->description = $description;
    }
    public function __toString() {
        return "id=".$this->id." titre=".$this->titre." nb exemplaires=".$this->nb." nbPage=".$this->nbPages." image=".$this->image;
    }

    public function jsonSerialize() {
        return [
            'id' => $this->id,
            'titre' => $this->titre,
            'nbExemplaire' => $this->nb,
            'nbPages' => $this->nbPages,
            'image' => $this->image,
            'auteurNom' => $this->auteur->getNom(),
            'idAuteur' => $this->auteur->getIdAuteur(),
            'description' => $this->description
        ];
    }
    public function getId(){return $this->id;}
    public function setId($id){$this->id = $id;}

    public function getTitre(){return $this->titre;}
    public function setTitre($titre){$this->titre = $titre;}
    
    public function getNb() {return $this->nb;}
    public function setNb($nb) {$this->nb = $nb;}

    public function getNbPages(){return $this->nbPages;}
    public function setNbPages($nbPages){$this->nbPages = $nbPages;}

    public function getImage(){return $this->image;}
    public function setImage($image){$this->image = $image;}
    
    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;}
    
    function getAuteur() {return $this->auteur;}
    function setAuteur($auteur): void { $this->auteur = $auteur;}
    
    function getEditeur() {return $this->editeur;}
    function setEditeur($editeur): void {$this->editeur = $editeur;}
}