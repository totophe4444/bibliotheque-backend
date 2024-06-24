<?php

class User {
    private $login;
    private $password;
    private $mail;
    private $role;
    private $image;
    private $estValide;
    
    function __construct($login, $password, $mail, $role, $image, $estValide) {
        $this->login = $login;
        $this->password = $password;
        $this->mail = $mail;
        $this->role = $role;
        $this->image = $image;
        $this->estValide = $estValide;
    }
    public function __toString() {
        return $this->login." ".$this->password." ".$this->mail." ".$this->role." ". $this->estValide;
    }
    public function getLogin() {
        return $this->login;
    }
    public  function getPassword() {
        return $this->password;
    }
    public function getMail() {
        return $this->mail;
    }
    public function getRole() {
        return $this->role;
    }
    public function getImage() {
        return $this->image;
    }
    public function getEstValide() {
        return $this->estValide;
    }
    public function setLogin($login): void {
        $this->login = $login;
    }
    public function setPassword($password): void {
        $this->password = $password;
    }
    public function setMail($mail): void {
        $this->mail = $mail;
    }
    public function setRole($role): void {
        $this->role = $role;
    }
    public function setImage($image): void {
        $this->image = $image;
    }
    public function setEstValide($estValide): void {
        $this->estValide = $estValide;
    }
}
