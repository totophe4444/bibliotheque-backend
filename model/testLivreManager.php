<?php
require_once "../outil/Outils.class.php";
require_once "LivreDao.class.php"; 
$livreDao = new LivreDao();
$livreDao->lireLivres();
$livres = $livreDao->getLivres();
afficherTableau($livres,"Tableau livres");
/*echo "id=".$livres[0]->getId()."<br>";

$livre = $livreDao->lireLivreById($livres[0]->getId());
afficherTableau($livre,"Tableau livre");
*/

//$livreDao->ajouterLivreBd("test titre",444,444,"miel.jpg","test description");

//echo "id=".$livres[0]->getId()."<br>";
//$livreDao->supprimerLivreBD($livres[0]->getId());

//echo "nbr=".$livreDao->supprimerTousLivresBD()."<br>";

//$livreDao->supprimerLivreBD($livres[0]->getId());

//$livreDao->modificationLivreBD($livres[0]->getId(),"test titre",444,444,"miel.jpg","test description");