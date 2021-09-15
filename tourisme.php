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
<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid ">
		<a class="navbar-brand" href="index.php"><img src="/assets/images/Logo_Orléans_Métropole_blanc.png" alt="logo Orléans blanc"> </a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="histoire.php">Histoire</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="tourisme.php">Tourisme</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="galerie.php">Galerie</a>
			  </li>
			</ul>
		  </div>
		</div>
	</nav>
	<header class="d-flex justify-content-center align-items-center flex-column">
		<img id="tourisme_image"src="assets/images/tourisme-orleans.jpg" alt="Orléans Tourisme">
		<img id="tourisme_logo" src="assets/images/logo_tourisme.png" alt="Logo Orléans Tourisme">
    </header>
	<section id="tourisme">
		<div id="map"></div>
	</section>
	<footer>
		<img src="assets/images/Logo_Orléans_Métropole_allblack.png" alt="logo Orléans Noir">
		<ul>
			<li>
				<a href="https://fr-fr.facebook.com/OrleansMetropole/" class="me-4 text-reset">
					<i class="fab fa-facebook-f"></i>
				</a>
			</li>
			<li>
				<a href="https://twitter.com/orleansmetropol?lang=fr" class="me-4 text-reset">
					<i class="fab fa-twitter"></i>
				</a>
			</li>
			<li>
				<a href="https://www.instagram.com/orleansmetropole/?hl=fr" class="me-4 text-reset">
					<i class="fab fa-instagram"></i>
				</a>
			</li>
			<li>
				<a href="https://fr.wikipedia.org/wiki/Orl%C3%A9ans" class="me-4 text-reset">
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
                macarte = L.map('map').setView([lat, lon], 12.4);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://api.maptiler.com/tiles/satellite/{z}/{x}/{y}.jpg?key=2zb5wlIS9ygdJrM0NouV', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
				// Nous ajoutons des marqueur
				var cathedral = L.marker([47.9018, 1.9101 ]).addTo(macarte);
				cathedral.bindPopup('<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d532202-Reviews-Cathedrale_Ste_Croix-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">Cathédrale Sainte Croix</a>');

				var groslot = L.marker([47.902586, 1.908075]).addTo(macarte);
				groslot.bindPopup('<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d230648-Reviews-Hotel_Groslot-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">Hôtel Groslot</a>')
            
				var groslot = L.marker([47.847807, 1.936780]).addTo(macarte);
				groslot.bindPopup('<a href="https://www.tripadvisor.fr/Attraction_Review-g187129-d3474784-Reviews-Parc_Floral_de_La_Source-Orleans_Loiret_Centre_Val_de_Loire.html" target="_blank">Parc Floral de La Source</a>')
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