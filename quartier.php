<?php 
    include"inc/header.inc.php";
    if($_SESSION['lang']=='eng'){
        $article='<main>
            <h1>
                Louvre District
            </h1>
            <p>
                The Louvre was built in 1190 by Philippe Auguste. At a time when the king was leaving for
                the crusade, it was a question of protecting Paris in particular from the threat posed by the
                Plantagenets installed in Normandy. The Louvre fortress, leaning against the rampart with a
                square enclosure reinforced with towers,a water ditch and its powerful keep, defending the
                city downstream of the Seine. A simple fortress under Philippe Auguste, the Louvre received
                some modifications in the 13th and early 14th centuries to house the treasure and the royal
                archives.
            </p>
            <img src="imgs/l1.jpg">
            <p>
                In the 13th century, during a period of strong urban growth, a suburb developed beyond the
                rampart: Saint-Honoré collegiate church (1204), Quinze-Vingt hospice built by Saint-Louis for
                300 blind people, while the district began to attract the hotels of great lords, Nesle hotel
                leaned against the rampart, Hosteriche hotel (1254 for Alphonse de Poitiers, which later
                became Alençon hotel) and Hôtel de Flandre (Guy de Dampierre, Count of Flandre - 1278).
            </p>
            <img src="imgs/l1.jpg">
            <p>
                The construction of Charles V&#39;s enclosure (1367 - 1383) rendered the Louvre&#39;s role in the
                defence of Paris obsolete.
                            Charles V transformed the fortress into a sumptuous residence, as it appeared
                in Jean de Berry\'s Très Riches Heures (c. 1411 - 1415), at once the king\'s residence, place

                of work and relaxation (his bookshop was installed in the north-west corner tower, a garden
                was built to the north), but also a place of reception and accommodation for distinguished
                guests.
            </p>
            <img src="imgs/l1.jpg">
            <p>
                In the shelter of the new enclosure, many hotels were built near the Louvre, cf. the hotels in
                the Middle Ages. A very dense working-class district developed between rue Saint-Honoré
                and rue de Beauvais, north of the Louvre. To serve this district of the Louvre, the only one in
                Paris to experience such a development between 1350 and 1450, during the Hundred Years&#39;
                War, the Saint-Germain-l&#39;Auxerrois church was rebuilt in the 13th century and then enlarged
                in several campaigns until the 16th century.
            </p>
            <img src="imgs/l1.jpg">
            <p>
                Charles VI (1380-1422) more willingly resides at the Saint-Pol Hotel. Throughout the 15th
                century, kings usually resided in their castles of Berry or Touraine and, when they came to
                Paris, at the Hôtel Saint-Pol and then at the Hôtel des Tournelles (Cf. Le Marais). The Louvre
                serves as a prison and arsenal.
            </p>
            <img src="imgs/l1.jpg">
        </main>';
    }else{
        $article='<main>
            <h1>
                Quartier du Louvre
            </h1>
            <p>
                Le Louvre est construit à partir de 1190 par Philippe Auguste. Au moment où le roi part pour la croisade, il s’agit de protéger Paris tout particulièrement de la menace que représentent les Plantagenets installés en Normandie. La forteresse du Louvre, adossée au rempart avec une enceinte carrée renforcée de tours et d’un fossé en eau et son puissant donjon, défend ainsi la ville en aval de la Seine. Simple forteresse sous Philippe Auguste, le Louvre reçoit quelques aménagements au XIIIe et début du XIVe siècle pour abriter le trésor et les archives royales.
            </p>
            <img src="imgs/l1.jpg">
            <p>
                Au XIIIe s., période de forte croissance urbaine, un faubourg se développe au-delà du rempart : collégiale Saint-Honoré (1204), hospice des Quinze-Vingt bâti par Saint-Louis pour 300 aveugles cependant que le quartier commence à attirer les hôtels de grands seigneurs, hôtel de Nesle adossé au rempart, hôtel d’Hosteriche (1254 pour Alphonse de Poitiers, qui devient ensuite l’hôtel d’Alençon) et Hôtel de Flandre (Guy de Dampierre, comte de Flandre – 1278). 
            </p>
            <img src="imgs/l1.jpg">
            <p>
                La construction de l’enceinte de Charles V (1367 - 1383) rend caduc le rôle du Louvre dans la défense de Paris. 
                Charles V transforme la forteresse en une somptueuse demeure, telle qu’elle apparaît dans les Très Riches Heures de Jean de Berry (vers 1411 – 1415), à la fois résidence, lieu de travail et de détente du roi (sa librairie est installée dans la tour d’angle nord-ouest, un jardin est aménagé au nord), mais aussi lieu de réception et de séjour des hôtes de marque.
            </p>
            <img src="imgs/l1.jpg">
            <p>
                A l’abri de la nouvelle enceinte, de nombreux hôtels se construisent à proximité du Louvre, cf. les hôtels au Moyen Age. Un quartier populaire, très dense, se développe entre la rue Saint-Honoré et la rue de Beauvais, au nord du Louvre. Pour desservir ce quartier du Louvre, le seul de Paris à connaître un tel développement entre 1350 et 1450, durant la guerre de Cent-Ans, l’église Saint-Germain-l’Auxerrois est rebâtie au XIIIe s. puis agrandie en plusieurs campagnes jusqu’au XVIe s.
            </p>
            <img src="imgs/l1.jpg">
            <p>
                Charles VI (1380-1422) réside plus volontiers à l’hôtel Saint-Pol. Tout au long du XVe s., les rois résident habituellement dans leurs châteaux de Berry ou de Touraine et, lorsqu’ils viennent à Paris, à l’hôtel Saint-Pol puis à celui des Tournelles (Cf. Le Marais). Le Louvre sert de prison et d’arsenal.
            </p>
            <img src="imgs/l1.jpg">
        </main>';
     }
    ?>
    <body>
        <?php 
            include"inc/nav.inc.php";
            echo $article;
            include"inc/footer.inc.php";
        ?>
    </body>
</html>