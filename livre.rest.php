<?php
require_once "./model/LivreDao.class.php"; 
require_once "./model/AuteurDao.class.php"; 

$livreDao = LivreDao::getInstance();
$auteurDao = AuteurDao::getInstance();

if(isset($_GET["operation"])){
    if($_GET["operation"]=="lister"){
        try{
            //echo "LISTER<br>";
            $livres=$livreDao->findAllLivre();
            //Outils::afficherTableau($livres, "livres");
            //var_dump($livres[0]->jsonSerialize());
            print("lister#");
            print(json_encode($livres));
        }catch(PDOException $e){
            print "erreur#".$e->getMessage();
        }
    }
    if($_GET["operation"]=="auteur"){
        try{
            //echo "AUTEUR id=".$_GET['id']."<br>";
            $auteur=$auteurDao->findAuteurByIdAuteur($_GET['id']);
            Outils::afficherTableau($auteur, "auteur");
            //var_dump($livres[0]->jsonSerialize());
            //print("lister#");
            print(json_encode($auteur));
            $livres = $livreDao->findAllLivreByIdAuteur($_GET['id']);
            print(json_encode($livres));
        }catch(PDOException $e){
            print "erreur#".$e->getMessage();
        }
    }
}
