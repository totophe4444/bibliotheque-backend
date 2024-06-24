<?php 
  require_once "../outil/Outils.class.php"; 
  require_once "LivreDao.class.php"; 
  $tabLivre1 = array
        (
            "titre" => "Les quatre accords toltèques",
            "prix" => 12.24,
            "nbPages" => 1602,
            "image" => "tolteques.jpg",
            "description" => "Castaneda a fait découvrir au grand public les enseignements des chamans mexicains qui ont pour origine la tradition toltèque, gardienne des connaissances de Quetzacoatl, le serpent à plumes. Dans ce livre, Don Miguel révèle la source des croyances limi-tatrices qui nous privent de joie et créent des souffrances inutiles. br/ br/ Il montre en des termes très simples comment on peut se libérer du conditionnement collectif - le rêve de la planète, basé sur la peur - afin de retrouver la dimension d'amour inconditionnel qui est à notre origine et constitue le fondement des enseignements toltèques. br/ br/ Les quatre accords proposent un puissant code de conduite capable de transformer rapidement notre vie en une expérience de liberté, de vrai bonheur et d'amour. Le monde fascinant de la Connaissance véritable et incarnée est enfin à la portée de chacun."
        );
  $tabLivres[]=$tabLivre1;
  $tabLivre2 = array
  (
      "titre" => "Saturne",
      "prix" => 6.62,
      "nbPages" => 466,
      "image" => "saturne.jpg",
      "description" => "Sa fille est encore un bébé quand Harry meurt à 34 ans dans des circonstances tragiques. Il est issu d’une grande lignée de médecins contraints à l’exil au moment de l’indépendance de l’Algérie, et qui ont rebâti un empire médical en France. L’aîné, Armand, mettra ses pas dans ceux de sa famille. Mais la passion de Harry pour une femme à la beauté incendiaire fera voler en éclats les reliques d’un royaume où l’argent coule à flots. Saturne dépeint le crépuscule d’un monde et de ses dieux. C’est aussi un roman sur l’épreuve de nos deuils, et une grande histoire d’amour : celle d’une enfant guettée par la folie et la mort, mais qui est devenue écrivain parce que, une nuit, elle en avait fait la promesse au fantôme de son père.\n
      Sarah Chiche est l’auteure de plusieurs romans et essais. Son quatrième roman, Saturne, sélectionné par les prix littéraires les plus prestigieux, a rencontré un grand succès public et critique."
  );
$tabLivres[]=$tabLivre2;
$tabLivre3 = array
(
    "titre" => "Tout le bleu du ciel",
    "prix" => 14.48,
    "nbPages" => 642,
    "image" => "ciel.jpg",
    "description" => "Petitesannonces.fr : Jeune homme de 26 ans, condamné à une espérance de vie de deux ans par un Alzheimer précoce, souhaite prendre le large pour un ultime voyage. Recherche compagnon(ne) pour partager avec moi ce dernier périple.\n
    Émile a décidé de fuir l’hôpital, la compassion de sa famille et de ses amis. À son propre étonnement, il reçoit une réponse à cette annonce. Trois jours plus tard, devant le camping-car acheté secrètement, il retrouve Joanne, une jeune femme coiffée d’un grand chapeau noir qui a pour seul bagage... "
);
$tabLivres[]=$tabLivre3;
$tabLivre4 = array
(
    "titre" => "Kilomètre zéro",
    "prix" => 16.56,
    "nbPages" => 246,
    "image" => "kilometre.jpg",
    "description" => "Maëlle, directrice financière d'une start-up en pleine expansion, n'a tout simplement pas le temps pour les rêves. Mais quand sa meilleure amie, Romane, lui demande un immense service - question de vie ou de mort -, elle accepte malgré elle de rejoindre le Népal. Elle ignore que l'ascension des Annapurnas qu'elle s'apprête à faire sera aussi le début d'un véritable parcours initiatique.Au cours d'expériences et de rencontres bouleversantes, Maëlle va apprendre les secrets du bonheur profond et transformer sa vie. Mais... "
);
$tabLivres[]=$tabLivre4;
$tabLivre5 = array
(
    "titre" => "Le tourbillon de la vie",
    "prix" => 8.28,
    "nbPages" => 326,
    "image" => "tourbillon.jpg",
    "description" => "Au cours d'un été, Arthur et son petit-fils décident de rattraper les années perdues. Plus de soixante ans les séparent, mais, ensemble, ils vont partager les souvenirs de l'un et les rêves de l'autre. Le bonheur serait total si Arthur ne portait pas un lourd secret…Un roman sur le temps qui passe, la transmission et les plaisirs simples qui font le sel de la vie.Entre émotion, rire et nostalgie, Aurélie Valognes nous touche en plein cœur.Humanité et bienveillance. Une parenthèse enchantée. CNews.Ce récit tendre et plein d... "
);
$tabLivres[]=$tabLivre5;
$tabLivre6 = array
(
    "titre" => "Je revenais des autres",
    "prix" => 12.54,
    "nbPages" => 304,
    "image" => "autres.jpg",
    "description" => "Philippe a quarante ans, est directeur commercial, marié et père de deux enfants. Ambre a vingt ans, n’est rien et n’a personne. Sauf lui. Quand, submergée par le vide de sa vie, elle essaie de mourir, Philippe l’envoie loin, dans un village de montagne, pour qu’elle se reconstruise, qu’elle apprenne à vivre sans lui. Pour sauver sa famille aussi.
    Je revenais des autres est l’histoire d’un nouveau départ. Le feuilleton d’un hôtel où vit une bande de saisonniers tous un peu abîmés par la vie. Le récit de leurs amitiés,... "
);
$tabLivres[]=$tabLivre6;
$tabLivre7 = array
(
    "titre" => "Je revenais des autres",
    "prix" => 18.99,
    "nbPages" => 304,
    "image" => "autres.jpg",
    "description" => "Philippe a quarante ans, est directeur commercial, marié et père de deux enfants. Ambre a vingt ans, n’est rien et n’a personne. Sauf lui. Quand, submergée par le vide de sa vie, elle essaie de mourir, Philippe l’envoie loin, dans un village de montagne, pour qu’elle se reconstruise, qu’elle apprenne à vivre sans lui. Pour sauver sa famille aussi.
    Je revenais des autres est l’histoire d’un nouveau départ. Le feuilleton d’un hôtel où vit une bande de saisonniers tous un peu abîmés par la vie. Le récit de leurs amitiés,... "
);
$tabLivres[]=$tabLivre7;
$tabLivre8 = array
(
    "titre" => "Rien ne t'efface",
    "prix" => 4.82,
    "nbPages" => 162,
    "image" => "efface.jpg",
    "description" => "C'était il y a dix ans. Jour pour jour.
    Un matin d'été, sur la plage de Saint-Jean-de-Luz, le petit Esteban disparaissait.
    Maddi, sa mère, ne s'est jamais pardonné d'avoir baissé la garde. Et puis, dix ans plus tard, même plage, même âge : ce garçon qui lui ressemble tant... Même silhouette de crevette, même maillot indigo, même tache de naissance. Sosie ? Jumeau ? Pour Maddi, aucun doute : ce garçon, ce Tom, c'est son fils – Esteban réincarné. Pour le suivre, le protéger, elle laissera tout derrière elle. Car rien ne... "
);
$tabLivres[]=$tabLivre8;
$tabLivre9 = array
(
    "titre" => "Ces femmes qui aiment trop",
    "prix" => 6.24,
    "nbPages" => 248,
    "image" => "trop.jpg",
    "description" => "Les femmes qui aiment trop sont attirées par des hommes troubles, distants, aux humeurs changeantes, parfois alcooliques, infidèles ou obsédés par leur travail. Les femmes qui aiment trop trouvent les hommes biens plutôt ennuyeux et tombent sur des hommes qui ne parviennent pas à les aimer en retour. Les femmes qui aiment trop se sentent vides sans ces hommes mais tourmentées en leur présence. A travers des récits authentiques et personnels, Robin Norwood nous plonge au coeur des rouages psychologiques qui amènent tant de femmes à s'enfermer dans des relations compliquées ou destructrices. Indispensable et bouleversant, ce livre aidera toutes les femmes à briser le cercle infernal de la dépendance amoureuse et de l'échec pour redevenir elles-mêmes et s'aimer mieux pour mieux aimer."
);
$tabLivres[]=$tabLivre9;
$tabLivre10 = array
(
    "titre" => "L'Étranger",
    "prix" => 8.24,
    "nbPages" => 420,
    "image" => "etranger.jpg",
    "description" => "Quand la sonnerie a encore retenti, que la porte du box s'est ouverte, c'est le silence de la salle qui est monté vers moi, le silence, et cette singulière sensation que j'ai eue lorsque j'ai constaté que le jeune journaliste avait détourné les yeux. Je n'ai pas regardé du côté de Marie. Je n'en ai pas eu le temps parce que le président m'a dit dans une forme bizarre que j'aurais la tête tranchée sur une place publique au nom du peuple français.."
);
$tabLivres[]=$tabLivre10;
$tabLivre11 = array
(
    "titre" => "Lait et miel",
    "prix" => 10.24,
    "nbPages" => 162,
    "image" => "miel.jpg",
    "description" => "lait et miel est un recueil poétique que toutes les femmes devraient avoir sur leur table de nuit ou la table basse de leur salon. Accompagnés de ses propres dessins, ses poèmes, d'une honnêteté et d'une authenticité rares, se lisent comme les expériences collectives et quotidiennes d'une femme du... "
);
$tabLivres[]=$tabLivre11;
$tabLivre12 = array
(
    "titre" => "Séquences mortelles",
    "prix" => 18.24,
    "nbPages" => 468,
    "image" => "mortelles.jpg",
    "description" => "L’illustre Jack McEvoy, devenu journaliste pour un site web de défense des consommateurs, a eu raison de bien des assassins. Jusqu'au jour où il est accusé de meurtre par deux inspecteurs du LAPD. Et leurs arguments ont du poids : il aurait tué une certaine Tina Portrero, avec laquelle il a effectivement passé une nuit. Malgré les interdictions de la police et de son propre patron, il enquête et découvre que d'autres femmes sont mortes de la même et parfaitement horrible façon : le cou brisé. Le tueur, il le comprend aussi,... "
);
$tabLivres[]=$tabLivre12;
$livreDao = new LivreDao();
for($i=0; $i<count($tabLivres); $i++) {     
    $livreDao->ajouterLivreBd($tabLivres[$i]['titre'],$tabLivres[$i]['prix'],$tabLivres[$i]['nbPages'],$tabLivres[$i]['image'],$tabLivres[$i]['description']);
}
?>
