<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="/assets/dist/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   	<link rel="icon" href="assets/images/Logo_Orléans_Métropole_blanc.png" />
	<title>Orléans - Tourisme</title>
</head>
<body id="tourismeBody">
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid ">
		<a class="navbar-brand" href="index.php"><img src="/assets/images/Logo_Orléans_Métropole_blanc.png" alt="logo Orléans blanc"> </a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			<li class="nav-item">
				<a class="nav-link" aria-current="page" href="index.php">Accueil</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="histoire.php">Histoire</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" href="tourisme.php">Tourisme</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="galerie.php">Galerie</a>
			</li>
			</ul>
		</div>
		</div>
	</nav>
	<header id="tourismHeader" class="d-flex justify-content-center align-items-center flex-column">
		<img id="tourisme_image"src="assets/images/tourisme-orleans.jpg" alt="Orléans Tourisme">
		<div id="tourismeLogoBg">
			<img id="tourisme_logo" src="assets/images/logo_tourisme.png" alt="Logo Orléans Tourisme">
		</div>
	</header>
	<section id="tourisme">
		<p id=tutoMap>Utilisez la carte et cliquez sur les icônes sur la carte pour découvrir les lieux à visiter à Orléans!</p>
		<div id="map"></div>
		<div id="cards">
			<div class="card col-11">
				<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d532202-Reviews-Cathedrale_Ste_Croix-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">
					<div class="card-title text-center">Cathédrale Sainte Croix</div>
					<img src="assets/images/cathedrale.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
									Comptant parmi les 5 plus vastes cathédrales gothiques de France (140m de long, 53m de large avec une flèche culminant à 106m), Sainte-Croix fut commencée en 1287 et officiellement inaugurée le 8 mai 1829. Elle est chargée d\'une longue histoire : Jeanne d\'Arc y pria, Henri IV lança sa reconstruction en 1601, Louis XIV finança les transepts qui lui rendent hommage en affichant sa devise et son soleil.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d3474784-Reviews-Parc_Floral_de_La_Source-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">
					<div class="card-title text-center">Parc Floral de La Source</div>
					<img src="assets/images/parc_floral.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Situé à la lisière entre le coteau de Sologne et la plaine du Val de Loire, le parc floral de La Source est composé d’espaces où se mêlent les mondes végétal, minéral et animal : jardin d’iris, roseraie, serre aux papillons, petit train… sont autant de lieux qui se renouvellent tout au long de l’année.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.orleans-metropole.fr/tourisme/parcs-et-jardins/jardin-des-plantes" target="_blank">
					<div class="card-title text-center">Jardin des Plantes</div>
					<img src="assets/images/plantes.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						En 1640, sur la rive droite de la Loire, à l'est de l'actuel Pont Joffre, la Société des apothicaires crée un jardin botanique afin d'y cultiver des plantes médicinales. En 1834, le jardin est transféré sur l'emplacement actuel. Il est lieu d'acclimatation des plantes rares, arrivées des contrées exotiques par les bateaux de Loire et site d'études et d'instruction. L'orangerie et les serres chaudes sont construites à cette époque. A la fin du 19ème siècle, la recherche de décors floraux dans un cadre arboré prime sur l'étude scientifique du végétal.Aujourd'hui, le jardin des plantes, s'il demeure un jardin d'agrément, est aussi un lieu d'expérimentation et de découverte du végétal. C'est ici que les jardiniers testent, essaient, observent et éprouvent les végétaux et les techniques de fleurissement et d'ntretien plus respectueuses de notre environnement. Il est un des outils du Développement Durable et prolonge au 21ème siècle les missions entamées au 17ème.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.tourisme-orleansmetropole.com/activites-loisirs/musee-des-beaux-arts" target="_blank">
					<div class="card-title text-center">Musée des Beaux Arts</div>
					<img src="assets/images/beaux-arts.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Peintures, dessins, estampes, sculptures, objets d'art… Quelle que soit votre sensibilité artistique, vous serez forcément séduit. À l'entresol par exemple : les collections du XIXe dressent un panorama représentatif, du néoclassicisme au romantisme et de l’académisme au réalisme. Au 1er étage, place à la peinture française du XVIIe au XVIIIe que l'on découvre à travers les collections Richelieu, la religion, la mythologie, l'histoire, une étonnante galerie de portraits, des bustes d’Houdon et de Pigalle.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.orleans-metropole.fr/culture/musees-expositions/hotel-cabu-musee-dhistoire-et-darcheologie" target="_blank">
					<div class="card-title text-center">Musée d'Histoire et d'Archéologie</div>
					<img src="assets/images/histoire.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Installé dans l'hôtel Cabu, l'un des plus beaux monuments Renaissance de la ville, le musée abrite le trésor de Neuvy-en-Sullias, un ensemble exceptionnel de bronzes gaulois et gallo-romains.Il présente également des objets et des oeuvres évoquant l'histoire de Jeanne d'Arc et celle d'Orléans à travers les enseignes, les productions d'autrefois (images populaires,dinanderie, porcelaines) et les anciennes activités industrielles, avec une salle consacrée à la marine de Loire.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.orleans-metropole.fr/culture/musees-expositions/museum-dorleans-pour-la-biodiversite-et-lenvironnement" target="_blank">
					<div class="card-title text-center">Museum d'Orléans pour la Biodiversité et l'Environnement</div>
					<img src="assets/images/MOBE.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Le Muséum d’Orléans pour la Biodiversité et l’Environnement (MOBE) est un musée de culture scientifique. Avec ses 5 niveaux et 1200 spécimens et échantillons exposés (sur 435000), le MOBE propose une découverte du monde qui nous entoure.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="http://www.orleansmetropolis.com/etablissement/75-frac-centre" target="_blank">
					<div class="card-title text-center">Fond Régional d'Art Contemporain</div>
					<img src="assets/images/frac.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Le Fonds régional d'art contemporain de la région Centre-Val de Loire est une collection publique d'art contemporain. Son espace d'exposition est situé à Orléans. Toutefois, comme pour tout FRAC, la plupart des oeuvres sont prêtées dans différentes structures de la région, de France et même du monde.Le fonds du FRAC Centre est spécialisé en art contemporain et tout particulièrement l'architecture expérimentale, de 1950 à nos jours. 800 maquettes et 14000 dessins composent la vaste collection du FRAC.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.orleans-metropole.fr/sport/etablissements-et-lieux-de-pratique/lo-centre-aqualudique" target="_blank">
					<div class="card-title text-center">L'O - centre aqualudique</div>
					<img src="assets/images/LO.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Ce nouvel espace de baignade, qui bénéficie d’une situation idéale en plein cœur de ville, conjugue le bien-être et le jeu. Le centre aqualudique a été pensé pour accueillir les publics les plus divers. Il comprend trois pôles thématiques : la halle ludique, l’espace bien-être – détente et le bassin sportif.
						</p>
					</div>
				</a>
			</div>
			<div class="card col-11">
				<a href="https://www.orleans-metropole.fr/sport/etablissements-et-lieux-de-pratique/la-base-de-loisirs-de-lile-charlemagne" target="_blank">
					<div class="card-title text-center">La base de loisirs de l'Ile Charlemagne</div>
					<img src="assets/images/charlemagne.jpg" class="card-img-top" alt="image lieu">
					<div class="card-body">
						<p class="card-text">
						Cette aire de loisirs de 70ha est organisée autour d'un plan d'eau en bord de Loire. Son accès est libre et gratuit.<br>C'est un espace privilégié pour se détendre, faire du vélo, du jogging, pratiquer bon nombre d'activités nautiques. Le site comprend une vaste plaine de jeux pour les enfants et de nombreux terrains d'activité spécialisés : beach volley, basket, handball, minifootball, baseball, volley ball, ping pong, pétanque, paintball (3 terrains), accrobranche (un parc de 8 parcours) et aqua-parc. La ligue du Centre de triathlon propose de l'initiation gratuite (06 08 02 89 50).<br>Sur le plan d'eau, initiation à la planche à voile, au dériveur, au catamaran ou au canoë kayak, dans le cadre de clubs. On peut également louer des canoës auprès du CKCO(02 38 66 14 80) ou apporter sa propre planche à voile. De mai à septembre, la baignade est autorisée dans une zone surveillée. A proximité, une aire particulièrement ventée permet de pratiquer le cerf-volant.<br>Enfin, toute l'année, de nombreux clubs y organisent des rencontres et animations sportives.
						</p>
					</div>
				</a>
			</div>
			
		</div>
	</section>
	<footer>
		<img src="assets/images/Logo_Orléans_Métropole_blanc.png" alt="logo Orléans Blanc">
		<ul>
			<li>
				<a href="https://fr-fr.facebook.com/OrleansMetropole/" class="text-reset">
					<i class="fab fa-facebook-f"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/orleansmetropol?lang=fr" class="text-reset">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://www.instagram.com/orleansmetropole/?hl=fr" class="text-reset">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li>
				<a href="https://fr.wikipedia.org/wiki/Orl%C3%A9ans" class="text-reset">
					<i class="fab fa-wikipedia-w"></i>
				</a>
			</li>
		</ul>
	</footer>
	<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>
	<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 47.88;
			var lon = 1.909;
			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
				macarte = L.map('map', {scrollWheelZoom: false}).setView([lat, lon], 13);
				// Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
				L.tileLayer('https://api.maptiler.com/tiles/satellite/{z}/{x}/{y}.jpg?key=2zb5wlIS9ygdJrM0NouV', {
					// Il est toujours bien de laisser le lien vers la source des données
					attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
					minZoom: 1,
					maxZoom: 20
				}).addTo(macarte);
				// Nous ajoutons des marqueur
				var cathedral = L.marker([47.9018, 1.9101 ]).addTo(macarte);
				cathedral.bindPopup('<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d532202-Reviews-Cathedrale_Ste_Croix-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank"><h2>Cathédrale Sainte Croix</h2><br><img src="assets/images/cathedrale.jpg" alt="image lieu"><br>Comptant parmi les 5 plus vastes cathédrales gothiques de France (140m de long, 53m de large avec une flèche culminant à 106m), Sainte-Croix fut commencée en 1287 et officiellement inaugurée le 8 mai 1829. Elle est chargée d\'une longue histoire : Jeanne d\'Arc y pria, Henri IV lança sa reconstruction en 1601, Louis XIV finança les transepts qui lui rendent hommage en affichant sa devise et son soleil.</a>');

				var groslot = L.marker([47.902586, 1.908075]).addTo(macarte);
				groslot.bindPopup('<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d230648-Reviews-Hotel_Groslot-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank"><h2>Hôtel Groslot</h2><br><img src="assets/images/hotel-groslot.jpg" alt="image lieu"><br>Situé près de la Cathédrale Sainte-Croix, l’hôtel Groslot avec sa façade de briques rouges est un magnifique édifice de la Renaissance construit de 1549 à 1558 pour le Bailli de la ville, Jacques Groslot. Les travaux sont confiés à l’architecte Jacques Androuet Ducerceau. Charles IX, Henri III et Henri IV furent des hôtes illustres.</a>')
			
				var parcfloral = L.marker([47.847807, 1.936780]).addTo(macarte);
				parcfloral.bindPopup('<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d3474784-Reviews-Parc_Floral_de_La_Source-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank"><h2>Parc Floral de La Source</h2><br><img src="assets/images/parc_floral.jpg" alt="image lieu"><br>Situé à la lisière entre le coteau de Sologne et la plaine du Val de Loire, le parc floral de La Source est composé d’espaces où se mêlent les mondes végétal, minéral et animal : jardin d’iris, roseraie, serre aux papillons, petit train… sont autant de lieux qui se renouvellent tout au long de l’année.</a>')
				
				var beauxarts = L.marker([47.902495, 1.9095]).addTo(macarte);
				beauxarts.bindPopup('<a href="https://www.tourisme-orleansmetropole.com/activites-loisirs/musee-des-beaux-arts" target="_blank"><h2>Musée des Beaux Arts</h2><br><img src="assets/images/beaux-arts.jpg" alt="image lieu"><br>Peintures, dessins, estampes, sculptures, objets d\'art… Quelle que soit votre sensibilité artistique, vous serez forcément séduit. À l\'entresol par exemple : les collections du XIXe dressent un panorama représentatif, du néoclassicisme au romantisme et de l’académisme au réalisme. Au 1er étage, place à la peinture française du XVIIe au XVIIIe que l\'on découvre à travers les collections Richelieu, la religion, la mythologie, l\'histoire, une étonnante galerie de portraits, des bustes d’Houdon et de Pigalle.</a>')

				var mobe = L.marker([47.908305, 1.9075851029260926]).addTo(macarte);
				mobe.bindPopup('<a href="https://www.orleans-metropole.fr/culture/musees-expositions/museum-dorleans-pour-la-biodiversite-et-lenvironnement" target="_blank"><h2>MOBE</h2><br><img src="assets/images/MOBE.jpg" alt="image lieu"><br>Le Muséum d’Orléans pour la Biodiversité et l’Environnement (MOBE) est un musée de culture scientifique. Avec ses 5 niveaux et 1200 spécimens et échantillons exposés (sur 435000), le MOBE propose une découverte du monde qui nous entoure.</a>')

				var frac = L.marker([47.903952797742626, 1.8969224076307478]).addTo(macarte);
				frac.bindPopup('<a href="http://www.orleansmetropolis.com/etablissement/75-frac-centre" target="_blank"><h2>Fond Régional d\'Art Contemporain</h2><br><img src="assets/images/frac.jpg" alt="image lieu"><br>Le Fonds régional d\'art contemporain de la région Centre-Val de Loire est une collection publique d\'art contemporain. Son espace d\'exposition est situé à Orléans. Toutefois, comme pour tout FRAC, la plupart des oeuvres sont prêtées dans différentes structures de la région, de France et même du monde.Le fonds du FRAC Centre est spécialisé en art contemporain et tout particulièrement l\'architecture expérimentale, de 1950 à nos jours. 800 maquettes et 14000 dessins composent la vaste collection du FRAC.</a>')

				var lo = L.marker([47.91332077675004, 1.9089871582704765]).addTo(macarte);
				lo.bindPopup('<a href="https://www.orleans-metropole.fr/sport/etablissements-et-lieux-de-pratique/lo-centre-aqualudique" target="_blank"><h2>L\'O - centre aqualudique</h2><br><img src="assets/images/LO.jpg" alt="image lieu"><br>Ce nouvel espace de baignade, qui bénéficie d’une situation idéale en plein cœur de ville, conjugue le bien-être et le jeu. Le centre aqualudique a été pensé pour accueillir les publics les plus divers. Il comprend trois pôles thématiques : la halle ludique, l’espace bien-être – détente et le bassin sportif.</a>')

				var histoire = L.marker([47.900935717936086, 1.9048307265281306]).addTo(macarte);
				histoire.bindPopup('<a href="https://www.orleans-metropole.fr/culture/musees-expositions/hotel-cabu-musee-dhistoire-et-darcheologie" target="_blank"><h2>Musée d\'Histoire et d\'Archéologie</h2><br><img src="assets/images/histoire.jpg" alt="image lieu"><br>Installé dans l\'hôtel Cabu, l\'un des plus beaux monuments Renaissance de la ville, le musée abrite le trésor de Neuvy-en-Sullias, un ensemble exceptionnel de bronzes gaulois et gallo-romains.Il présente également des objets et des oeuvres évoquant l\'histoire de Jeanne d\'Arc et celle d\'Orléans à travers les enseignes, les productions d\'autrefois (images populaires,dinanderie, porcelaines) et les anciennes activités industrielles, avec une salle consacrée à la marine de Loire.</a>')

				var plantes = L.marker([47.89114590949324, 1.8972963880623706]).addTo(macarte);
				plantes.bindPopup('<a href="https://www.orleans-metropole.fr/tourisme/parcs-et-jardins/jardin-des-plantes" target="_blank"><h2>Jardin des Plantes</h2><br><img src="assets/images/plantes.jpg" alt="image lieu"><br>En 1640, sur la rive droite de la Loire, à l\'est de l\'actuel Pont Joffre, la Société des apothicaires crée un jardin botanique afin d\'y cultiver des plantes médicinales. En 1834, le jardin est transféré sur l\'emplacement actuel. Il est lieu d\'acclimatation des plantes rares, arrivées des contrées exotiques par les bateaux de Loire et site d\'études et d\'instruction. L\'orangerie et les serres chaudes sont construites à cette époque. A la fin du 19ème siècle, la recherche de décors floraux dans un cadre arboré prime sur l\'étude scientifique du végétal.Aujourd\'hui, le jardin des plantes, s\'il demeure un jardin d\'agrément, est aussi un lieu d\'expérimentation et de découverte du végétal. C\'est ici que les jardiniers testent, essaient, observent et éprouvent les végétaux et les techniques de fleurissement et d\'entretien plus respectueuses de notre environnement. Il est un des outils du Développement Durable et prolonge au 21ème siècle les missions entamées au 17ème.</a>')

				var charlemagne = L.marker([47.89468491301082, 1.939898294820921]).addTo(macarte);
				charlemagne.bindPopup('<a href="https://www.orleans-metropole.fr/sport/etablissements-et-lieux-de-pratique/la-base-de-loisirs-de-lile-charlemagne" target="_blank"><h2>La base de loisirs de l\'Ile Charlemagne </h2><br><img src="assets/images/charlemagne.jpg" alt="image lieu"><br>Cette aire de loisirs de 70ha est organisée autour d\'un plan d\'eau en bord de Loire. Son accès est libre et gratuit.<br>C\'est un espace privilégié pour se détendre, faire du vélo, du jogging, pratiquer bon nombre d\'activités nautiques. Le site comprend une vaste plaine de jeux pour les enfants et de nombreux terrains d\'activité spécialisés : beach volley, basket, handball, minifootball, baseball, volley ball, ping pong, pétanque, paintball (3 terrains), accrobranche (un parc de 8 parcours) et aqua-parc. La ligue du Centre de triathlon propose de l\'initiation gratuite (06 08 02 89 50).<br>Sur le plan d\'eau, initiation à la planche à voile, au dériveur, au catamaran ou au canoë kayak, dans le cadre de clubs. On peut également louer des canoës auprès du CKCO(02 38 66 14 80) ou apporter sa propre planche à voile. De mai à septembre, la baignade est autorisée dans une zone surveillée. A proximité, une aire particulièrement ventée permet de pratiquer le cerf-volant.<br>Enfin, toute l\'année, de nombreux clubs y organisent des rencontres et animations sportives.<br></a>')
			}
			window.onload = function(){
		// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
		initMap(); 
			};
		</script>
	<script src="https://kit.fontawesome.com/661d52523c.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>