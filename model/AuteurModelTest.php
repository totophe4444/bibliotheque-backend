<?php
require_once "AuteurDao.class.php"; 
require_once "Auteur.class.php";
require_once "./../outil/outils.class.php";

echo "========== TESTS AuteurDao ==========<br>";
$auteurDao = AuteurDao::getInstance(); //new ThemeDao();

echo "---- TEST findAllAuteur() ----<br>";
$auteurList = $auteurDao->findAllAuteur();
Outils::afficherListObjet($auteurList, "auteurList");

echo "---- TEST findAuteurByIdAuteur() ----<br>";
$auteur = $auteurDao->findAuteurByIdAuteur(2);
echo "auteur = ".$auteur."<br>";

echo "---- TEST creerAuteur(auteur) ----<br>";
$auteur =new Auteur("Victor Hugo", "Victor Hugo est un poète, dramaturge, écrivain, romancier et dessinateur romantique français, né le 26 février 1802 (7 ventôse an X) à Besançon et mort le 22 mai 1885 à Paris. Il est considéré comme l'un des plus importants écrivains de la langue française. Il est aussi une personnalité politique et un intellectuel engagé qui a eu un rôle idéologique majeur et occupe une place marquante dans l'histoire des lettres françaises au XIXe siècle. Au théâtre, Victor Hugo s'est imposé comme un des chefs de file du romantisme français en présentant sa conception du drame romantique dans les préfaces qui introduisent Cromwell en 1827, puis Hernani en 1830, qui sont de véritables manifestes, puis par ses autres œuvres dramatiques, en particulier Lucrèce Borgia en 1833 et Ruy Blas en 1838. ");
if($auteurDao->creerAuteur($auteur)){
    echo $auteur->getNom()." a été persité.<br>";
}
else {
    echo $auteur->getNom()." n'a pas été persisté.<br>";
}
