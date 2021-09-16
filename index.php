<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="/assets/dist/css/style.css" rel="stylesheet">
	<title>Orléans</title>
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
        <video muted autoplay loop class="video d-flex col-12">
            <source src="Orléans_-terre-de-rencontres-et-d_émotions.webm" type="video/webm">
            Sorry, your browser doesn't support embedded videos.
        </video>
    </header>




	<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
<h2>Image Modal</h2>
<p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
<p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>

<img id="myImg" src="img_snow.jpg" alt="Snow" style="width:100%;max-width:300px">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
	<section id="history">
		<h2>ORLÉANS: UNE VILLE HISTORIQUE</h2>
		<hr>
		<div>
			<img src="/assets/images/JDarc.jpg" class="col-6">
			<p class="col-6"></p>
		</div>
	</section>
	<section id="tourism">
		<h2 class="justify-content-center d-flex">DÉCOUVREZ ORLÉANS</h2>

		<button type="button" class="button-tourism" >Button</button>

	</section>

	<section id="photos">
		<h2>GALLERIE DE PHOTOS</h2>

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
	<script src="https://kit.fontawesome.com/661d52523c.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>