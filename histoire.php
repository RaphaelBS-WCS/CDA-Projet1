<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/assets/dist/css/style.css" rel="stylesheet">
    <title>Orléans</title>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="/assets/images/Logo_Orléans_Métropole_blanc.png"
                        alt="logo Orléans blanc"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

        <section>
            <div class="histoire-banner">
                <h2 class="display-3 text-uppercase p-3">Histoire</h2>
            </div>
            <iframe class="my-5"
                src='https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1YgcekHqg-xKJlLOdX0TD9WZqnRov_8Q5YH6JxsGcDj0&font=Default&lang=en&initial_zoom=2&height=650'
                width='100%' height='650' webkitallowfullscreen mozallowfullscreen allowfullscreen
                frameborder='0'></iframe>
        </section>
    </main>
    <footer>
    <img src="assets/images/Logo_Orléans_Métropole_blanc.png" alt="logo Orléans Blanc">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>