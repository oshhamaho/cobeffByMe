<nav class="navbar navbar-expand-md navbar-dark bg-white">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <img  class="rounded mx-auto d-block " src="./assets/img/Logo_Cobeff_Petit.jpg">
            </li>
        </ul>
    </div>

    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <form class="form-inline">
            <label class="sr-only" for="inlineFormInputName2">Name</label>
            <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Nom d'utilisateur">

            <div class="input-group mb-2 mr-sm-2">
                <input type="password" class="form-control"  placeholder="Mot de passe">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Se connecter</button>
        </form>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a type="button" class="btn-floating btn-lg btn-fb"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
                <a type="button" class="btn-floating btn-lg btn-fb"><i class="fab fa-linkedin"></i></a>
            </li>
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="./">Cobeff</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="menu">
            <li class="nav-item active">
                <a class="nav-link" href="./"><strong>Accueil</strong> <span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link link" href="./?page=nousConnaitre">Nous connaître</a>
            </li>


            <li class="nav-item">

                <a class="nav-link" href="./?page=seFormer">Se former</a>
                <ul id="deroulant">
                    <li class="nav-link disabled">
                        Nos formations
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&vendeuse">Vendeuse polyvalente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&cuisine">Cuisine et service en salle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&auxiliaire">Auxiliaire de l'enfance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&services">Services aux personnes / Aide soignante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&entretien">Agent d'entretien en milieu
                            hospitalier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&jury">Préparation au jury du 2eme degré</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link" href="./?page=seFormer&cess">Complément CESS</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link link" href="./?page=nousContacter">Nous contacter</a>
            </li>
            <li class="nav-item">
                <a  class="nav-link disabled link" href="./?page=resto">Le restaurant Antoinette</a>
            </li>
        </ul>
    </div>
</nav>