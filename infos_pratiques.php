<?php
include"inc/header.inc.php";

$admin = true;
$hiddenButton = "hidden";

if ($admin == false) {
	$hiddenButton = "hidden";
}
else
{
	$hiddenButton = "image";
}
?>
	<body>
        <?php include"inc/nav.inc.php";?>
        <main id="infos_pratiques">
        	<article>
	        	<h2>Hôtels:</h2>
        		<div class="conteneur">
	        		<h3>Hôtel Louvre Bons Enfants</h3>
	        		<img src="imgs/Hotels/hotelLouvreBonsEnfants.jpg" alt="Hôtel" title="Hotel Louvre Bons Enfants">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit1">L’Hôtel Louvre Bons Enfants vous propose des chambres avec des poutres apparentes au plafond, lustres et appliques imitation cristal, grands miroirs et moulure qui donne au lieu une atmosphère chic et intemporelle. Mêlent tout ceci avec des teintes délicates du bois exotique à celle du rouge passion.</p>
						<a href="http://www.hotellouvrebonsenfants.com/" target="_blank">Site Web</a>
						<button onclick="calcRoute()">Itinéraire</button>
						<div class="editButton">
							<input type="hidden" id="save1" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit1', 'save1')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>Best Western Premier Louvre Saint Honore</h3>
	        		<img src="imgs/Hotels/hotelLouvreSaintHonore.jpg" alt="Hôtel" title="Best Western Premier Louvre Saint Honore">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="http://www.bestwesternpremier-louvresainthonore.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save2" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit2', 'save2')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>Hôtel De La Place Du Louvre</h3>
	        		<img src="imgs/Hotels/hotelPlaceDuLouvre.jpg" alt="Hôtel" title="Hôtel De La Place Du Louvre">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="https://www.paris-hotel-place-du-louvre.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save3" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit3', 'save3')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>Empire Paris</h3>
	        		<img src="imgs/Hotels/hotelEmpireParis.jpg" alt="Hôtel" title="Empire Paris">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="https://www.lempire-paris.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save4" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit4', 'save4')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>Timhotel Le Louvre</h3>
	        		<img src="imgs/Hotels/hotelTimhotelLeLouvre.jpg" alt="Hôtel" title="Timhotel Le Louvre">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="https://www.timhotel-paris-le-louvre.fr/fr/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save5" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit5', 'save5')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<hr>
        	</article>
        	<article>
        		<h2>Restaurants:</h2>
        		<div class="conteneur">
	        		<h3>Le Louvre Ripaille</h3>
	        		<img src="imgs/Restaurants/restaurantLeLouvreRipaille.jpg" alt="Restaurant" title="Restaurant Le Louvre Ripaille">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="http://www.louvre-ripaille.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save6" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit6', 'save6')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>sdfefez</h3>
	        		<img src="imgs/Restaurants/restaurantLeLouvreRipaille.jpg" alt="Restaurant" title="Restaurant Le Louvre Ripaille">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit7">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="http://www.louvre-ripaille.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save7" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit7', 'save7')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>sdfefez</h3>
	        		<img src="imgs/Restaurants/restaurantLeLouvreRipaille.jpg" alt="Restaurant" title="Restaurant Le Louvre Ripaille">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="http://www.louvre-ripaille.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save8" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit8', 'save8')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>sdfefez</h3>
	        		<img src="imgs/Restaurants/restaurantLeLouvreRipaille.jpg" alt="Restaurant" title="Restaurant Le Louvre Ripaille">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit9">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="http://www.louvre-ripaille.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save9" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit9', 'save9')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<div class="conteneur">
	        		<h3>sdfefez</h3>
	        		<img src="imgs/Restaurants/restaurantLeLouvreRipaille.jpg" alt="Restaurant" title="Restaurant Le Louvre Ripaille">
	        		<div class="desc">
	        			<h4>Descriptif:</h4>
		        		<p id="edit10">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="http://www.louvre-ripaille.com/" target="_blank">Site Web</a>
						<div class="editButton">
							<input type="hidden" id="save10" onclick="saveEdits()" src="imgs/validation_icon.png">
							<input type="<?= $hiddenButton; ?>" onclick="Edit('edit10', 'save10')" src="imgs/edit_icon.png">
						</div>
					</div>
				</div>
				<div class="clearFix"></div>
				<hr>
        	</article>
        	<aside>
        		<h2>Maps</h2>
        		<div id="map"></div>
        		<!---<div id="info"></div>--->
        	</aside>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlYIC717CpZtTDpBPcDvlG-D9RLTIRMZo&callback=myMap"></script>
        </main>
        <?php include"inc/footer.inc.php";?>
	</body>
</html>