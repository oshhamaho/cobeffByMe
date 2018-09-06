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
                <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse felis sem, ultricies et fermentum sed, bibendum at libero. Proin tempor ligula quis purus scelerisque, at interdum justo placerat. Curabitur sed elementum sem, a dapibus diam. Quisque convallis nisi at ipsum cursus ultricies. Donec placerat odio eu pellentesque eleifend. Sed at mattis nisi, vel posuere justo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut est nunc, molestie vitae nisi quis, sollicitudin vestibulum ante. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla sagittis vitae risus non tempor.</strong></p>
            </div>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active"> <!-- Les photos -->
                <img src="assets/img/Photosachetees/PhotoSlide/aidePersonne.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="assets/img/halt-and-catch-fire-wallpapers-31581-4110166.jpg" alt="" class="d-block w-100">
            </div>
            <div class="carousel-item ">
                <img src="assets/img/comment-isoler-une-porte-du-bruit-design-de-maison-bon-comment-isoler-une-porte-d-entree-du-bruit-ment-isoler-un-bas-1900-x-800-pixels.jpg" alt="" class="d-block w-100">
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
    <div class="container-1"><h6>Qui sommes-nous?</h6><p>In ultrices euismod velit ut rhoncus. Nam ullamcorper sapien vel elit placerat vestibulum. Nullam quam nunc, sodales sed massa nec, condimentum molestie eros. Morbi pharetra tellus a mauris interdum, quis faucibus neque blandit. Maecenas a facilisis nulla. Nullam vitae eros convallis, consectetur lorem ut, iaculis mauris. Quisque eget quam elit. Nulla volutpat mauris eu mauris hendrerit, vel fringilla neque cursus. Etiam ac odio dapibus, maximus justo in, aliquam quam.</p></div>
    <div class="container-2">

        <div id="carouselExampleIndicators1" class="carousel fade" data-ride="carousel">
            <ol class="carousel-indicators carousel-indicators--round">
                <li class="active" data-target="#carouselExampleIndicators1" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active"> <!-- Les photos -->
                    <img src="./assets/img/Photosachetees/PhotoSlide/aidepersonne4.jpg" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="./assets/img/Photosachetees/PhotoSlide/aidepersonne2.jpg" alt="" class="d-block w-100">
                </div>
                <div class="carousel-item ">
                    <img src="./assets/img/Photosachetees/PhotoSlide/aidepersonne3.jpg" alt="" class="d-block w-100">
                </div>
            </div>
        </div>
        <div id="texte"><p>Nunc sollicitudin lectus a sapien interdum, quis auctor nibh luctus. Vestibulum odio mi, iaculis et sagittis a, euismod ut justo. Suspendisse potenti. Fusce vulputate, sem nec porta vehicula, neque lorem volutpat arcu, et faucibus erat leo eu erat. Nullam sollicitudin diam at odio rutrum feugiat. Sed id nulla pellentesque, egestas nunc pretium, interdum mauris. Nulla sollicitudin magna vitae aliquet iaculis. Donec scelerisque augue lorem, eu mattis nisl porttitor non. Mauris pellentesque auctor arcu, bibendum sagittis erat dignissim non.</p></div>
    </div>
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