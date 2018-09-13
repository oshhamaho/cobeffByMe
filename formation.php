<?php
/**
 * Created by PhpStorm.
 * User: artem.tsymbalov
 * Date: 27-08-18
 * Time: 13:52
 */
?>
<head>
    <title>cobeff</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="assets/css/bootstrap.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/carousel.css"/>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.2.0/flexslider-min.css">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Cobeff</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu">
            <li class="nav-item active">
                <a class="nav-link" href="#accueil">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#connaitre">Nous connaître</a>
            </li>


            <li  class="nav-item">

                <a class="nav-link" href="#former">Se former</a>
                <ul id="deroulant">
                    <li class="nav-item">
                        <a class="nav-link">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Vendeuse polyvalente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Utilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nos formations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Nos formations</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#contacter">Nous contacter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#resto">Le restaurant Antoinette </a>
            </li>
        </ul>
    </div>
</nav>

<!-- Slider bootstrap -->
<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators carousel-indicators--round">
              <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>


          <!-- Figure geometrique -->
        <div id="triangle">
            <div id="montexte"> <!-- Texte -->
                <p><strong><h6>Un métier<h6>
                        <p>Caissière en supermarché,
                        Vendeuse en boutique,
                        Polyvalente caisse-vente-réassortiment,
                        Des métiers qui demandent dynamisme, goût des contacts humains,
                    débrouillardise, souci de la présentation.</p>

                       <h6>Une formation qualifiante</h6>

                <p>Programme de 917 heures organisé de septembre à juin sur 5 jours/semaine</p>
                        de 8h30 à 16h30.</strong></p>
            </div>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"> <!-- Les photos -->
                <img src="assets/img/Photosachetees/PhotoSlide/2752247_lweb.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="assets/img/Photosachetees/PhotoSlide/45334047_lweb.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item ">
                <img src="assets/img/Photosachetees/PhotoSlide/51687969_lweb.jpg" alt="" class="d-block w-100">
            </div>
        </div>
        <!-- On n' pas besoin cette partie - c'est des "flesh"
        <a href="#carouselExampleIndicators" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true">
                <span class="sr-only">Previous</span>
            </span>
        </a>
        <a href="#carouselExampleIndicators" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true">
                <span class="sr-only">Next</span>
            </span>
        </a>
        -->
    </div>
</div>


<!-- Conteneur avec contenu -->
<div class="container-fluid-1" >
    <div class="container-1"><h6>Qui sommes-nous?</h6><p>Depuis 1992, l'objectif de l'a.s.b.l. Cobeff est de coordonner et d'organiser dans différents secteurs des programmes d'insertion socio-professionnelle pour femmes peu scolarisées, confrontées aux difficultés d'une société en crise et qui refusent l'exclusion.
            La Cobeff se veut un réseau d'échanges et de soutien, de prospection et de recherche dans les secteurs de l'emploi et de la formation. Elle soutient également des projets d'insertion socio-professionnelle par la création d'entreprises solidaires.

            La Cobeff travaille en partenariat avec des centres de formation de base et de préformation afin de développer le parcours d'insertion des personnes.</p></div>
    <div class="container-2">
        <div id="demo" class="carousel slide" data-ride="carousel">



            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/Photosachetees/PhotoSlide/51687969_lpt.jpg" alt="Los Angeles" >
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Photosachetees/PhotoSlide/45334047_lpt.jpg" alt="Chicago" >
                </div>
                <div class="carousel-item">
                    <img src="assets/img/Photosachetees/PhotoSlide/2752247_lpt.jpg" alt="New York" >
                </div>
            </div>


            <!-- Left and right controls -->

          </div>


          </div>
          <div id="texte"><p>Acquérir des compétences professionnelles,
                  Développer un savoir faire adéquat,
                  Viser un métier,
                  Accéder à un emploi.</p>

                 <p> Mais aussi, apprendre à se connaître soi-même, reconstruire la confiance en ses capacités personnelles, entrer en contact avec le monde environnant et développer ses capacités de participation.</p></div>

  </div>







    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script>
        $(function () {
            $("#menu").menu();
        });
    </script>
    <!-- Slider bootstrap script options-->
<script src="assets/js/slider.js"></script>

        </body>
</html>