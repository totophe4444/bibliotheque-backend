<?php ob_start()?>

<!-- "Bonjour à tous, page accueil - ob_start"; -->
<!--  <h1>Page d'accueil</h1> -->
<h3>Bibliothéque spécialisé jeunes enfants</h3>
<p>Quand on parcourt l'histoire des bibliothèques françaises, on mesure l'importance du rôle
qu'y ont joué les bibliothèques pour les jeunes, à tel point qu'on a parfois l’impression que les
bibliothèques pour adultes leur doivent tout ou presque. Une grande part de ce qui a fait la force ou
l'originalité  de  nos  récentes  bibliothèques  de  lecture  publique  :  l'accès  libre  aux  documents,  la
présence  de  l'audiovisuel,  la  qualité  des  animations,  les  actions  menées  hors  les  murs,  le
développement de la lecture en milieu défavorisé, les séances d'accueil et de formation des usagers
à  la  bibliothèque,  etc.,  fut  souvent  expérimenté  et  réussi  d'abord  par  les  secteurs  pour  enfants.
Aujourd'hui, sur chacun de ces points, le secteur des adultes a rattrapé celui des enfants, en s'en
inspirant  si  bien  que  les  bibliothèques  pour  les  jeunes,  si  elles  veulent  conserver  leur  fonction
d'avant-garde  de  la  lecture  publique,  se  trouvent  devant  une  alternative  :  ou  bien  retrouver  de
nouvelles  spécificités  qui  les  distinguent  à  nouveau,  ou  bien  travailler  à  l'intégration  de  leurs
propres expériences dans le secteur pour adultes, et constituer une facette de la bibliothèque plutôt
qu'une section séparée. </p>
<div class="conteneur-ligne">
    <div class="element">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/teU8tAQo3CE" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="element">
        <p>
        La Bibliothèque nationale de France (BnF), ainsi dénommée depuis 1994, est la bibliothèque nationale de la République française, inaugurée sous cette nouvelle appellation le 30 mars 1995 par le président de la République, François Mitterrand. Héritière des collections royales constituées depuis le Moyen Âge, elle possède l'un des fonds les plus riches du monde.

        La BnF a une mission de collecte, d’archivage et d’entretien (conservation, restauration), en particulier de tout ce qui se publie ou s'édite en France, ainsi que du patrimoine hérité des collections antérieures et reçu par d'autres voies (dons, legs, achats), mais aussi des activités de recherche et de diffusion de la connaissance, grâce notamment à l’organisation régulière d’expositions à destination du grand public et de multiples manifestations culturelles, conférences, colloques, concerts, dans ses locaux et sur son site Internet. Elle anime un réseau de coopération avec d'autres services documentaires en France et participe à différentes formes de coopération internationale en la matière. 
        Les neurosciences interviennent de manière croissante dans les débats concernant l’apprentissage scolaire. 
        </p>
    </div>
</div>
<h3>Neurosciences et sociologie</h3>
<div class="conteneur-ligne">
    <div class="element">
        <p>
        Première institution chargée de la collecte du dépôt légal, à partir de 15371, elle est la plus importante bibliothèque de France et l’une des plus importantes au monde. Elle a le statut d’établissement public à caractère administratif. Ses activités sont réparties sur sept sites, dont le principal est la bibliothèque du site François-Mitterrand ou Tolbiac, située dans le 13e arrondissement de Paris, sur la rive gauche de la Seine. Le site historique, datant du XVIIe siècle, qui occupe désormais un îlot entier, se trouve dans le 2e arrondissement de Paris, sur le lieu du palais Mazarin qui hébergeait également la Bourse de Paris au XVIIIe siècle. On a coutume de le nommer « quadrilatère Richelieu », du nom de la rue de son entrée principale.

        La Bibliothèque nationale de France comporte quatorze départements et plusieurs collections principalement conservées sur ses quatre sites parisiens, y compris le Département des monnaies, médailles et antiques, héritier du Cabinet des Médailles. L'ensemble des collections représente environ 40 millions de documents imprimés et spécialisés. 
        L'ensemble des collections représente environ 40 millions de documents imprimés et spécialisés. L'ensemble des collections représente environ 40 millions de documents imprimés et spécialisés. 
        </p>
    </div>
    <div class="element">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/JqxhbF6iFco" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>
<h3>Organisation interne</h3>
<p>
    Hors de Paris, elle comprend la maison Jean-Vilar à Avignon et deux centres techniques de conservation à Bussy-Saint-Georges et Sablé-sur-Sarthe. Ses collections s'élèvent à un nombre total de 15 millions de livres et d’imprimés ainsi que plusieurs millions de périodiques, comptés pour 390 000 titres. Avec 10 000 manuscrits enluminés médiévaux, elle est la première bibliothèque au monde dans ce domaine, mais elle compte plus largement environ 250 000 manuscrits, des cartes, estampes, photographies, partitions, monnaies, médailles, documents sonores, vidéos, multimédias, numériques ou informatiques (16,5 milliards d'adresses URL), des objets et objets d’art, décors et costumes, etc.
</p>
<?php
    $content=ob_get_clean();
    $titre = "Accueil";
    require "template.view.php";
?>