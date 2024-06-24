<?php ob_start()?>
<h4>1 - QU’EST CE QU’UN COOKIE ?</h4>
<p>
Un cookie est un fichier texte susceptible d’être enregistré dans un espace dédié du disque dur de votre terminal* à l’occasion de la consultation d’un service en ligne grâce à votre logiciel de navigation. Un fichier cookie permet à son émetteur d’identifier le terminal dans lequel il est enregistré, pendant la durée de validité ou d’enregistrement dudit cookie.<br>
<br>
le terminal désigne l’équipement matériel (ordinateur, tablette, Smartphone…) que vous utilisez pour consulter ou voir s’afficher un site, une application, un contenu publicitaire etc.
</p>
<h4>2 - QUELS COOKIES UTILISONS-NOUS ?</h4>
Nous utilisons  un cookie nécessaires au bon fonctionnement de ce site. Il nous permet  de gérer et maintenir votre identification, maintenir vos sélections de livres.
<h4>3 - MODALITÉS DE REFUS/SUPPRESSION DES COOKIES</h4>
L’enregistrement d’un cookie dans un terminal est essentiellement subordonné à la volonté de l’utilisateur du terminal, que celui-ci peut exprimer et modifier à tout moment et gratuitement.<br>
<br>
Si vous avez accepté dans votre logiciel de navigation l’enregistrement de cookies dans votre terminal, les cookies intégrés dans les pages et contenus que vous avez consultés pourront être stockés temporairement dans un espace dédié de votre terminal.<br>
<br>
Si vous refusez l'enregistrement de cookies dans votre terminal, ou si vous supprimez ceux qui y sont enregistrés, vous ne pourrez plus bénéficier d'un certain nombre de fonctionnalités de notre site.<br>
<br>
 <?php
    $content=ob_get_clean();
    $titre = "Politique relatif aux cookies";
    require "template.view.php";
?>
