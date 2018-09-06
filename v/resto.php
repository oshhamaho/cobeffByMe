<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<div class="container ciao">
    <div class="row">
        <h1>Le restaurant Antoinette</h1>

        <div class="card-columns">
            <div class="card">
                <img class="card-img-top" src="./assets/img/Photosachetees/restaurant/resto.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">C'est quoi le restaurant Antoinette ?</h4>
                    <p class="card-text">
                    <p>Antoinette, le restaurant d’application de la Cobeff, est un lieu d’apprentissage et de
                        formation. En être client, c’est participer à notre action d’insertion.</p>


                    <p>Pour les réservations, uniquement par téléphone au : <br>
                    <center>02/250.35.60</center>
                    </p>
                </div>
            </div>
            <div class="card p-3">
                <blockquote class="blockquote mb-0 card-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <img class="card-img-top" src="./assets/img/Photosachetees/restaurant/resto2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title current-demo"><a href="resto.php">Le menu</a></h4>
                    <p class="card-text">Retrouver ici le menu hebdomadaire du restaurant Antoinette !</p>
                    <section>
                        <p>
                            <button id="trigger-overlay" type="button">Voir ici</button>
                        </p>
                    </section>
                </div>
            </div>

            <div class="card bg-primary text-white text-center p-3">
                <blockquote class="blockquote mb-0">
                    <p>Cher(es) client(es),</p>

                    ​

                    <p>Nous voilà repartis pour une année de formation cuisine.<br>

                        ​

                        A cet effet, n'hésitez pas à venir nous rejoindre pour venir déguster les plats préparés par nos
                        stagiaires sous les ordres avisés de nos deux chefs.<br>

                        ​

                    <p>Nouveauté de cette année:</p>

                    ​

                    <p> N'hésitez pas à nous suivre sur notre compte Facebook en cliquant sur le logo ci dessous

                        ​</p>
                    <footer class="footer">
                        <small>
                            <a href="https://www.facebook.com/Restaurant-Antoinette-Cobeff-629607177237717/" id="fb"
                               type="button" class="btn-floating btn-lg btn-fb"><i class="fab fa-facebook-f"></i></a>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card text-center">
                <div class="card-body">
                    <h4 class="card-title">Les tarifs</h4>
                    <div class="card bg-primary text-white text-center p-3">
                        <blockquote class="blockquote mb-0">
                            <small>

                                <strong>Menu du jour</strong>
                                <em>(Potage ou Entrée + Plat +Dessert)</em> 10,00€

                                <br>
                                <strong>​Potage ou Entrée</strong> 2,50€
                                <br>
                                <strong>Grande Entrée</strong> 5,00€
                                <br>
                                <strong>​Plat</strong> 6,50€
                                <br>
                                <strong>​Suggestion</strong> 6,50€
                                <br>
                                <strong>Supplément légumes</strong> 1,00€
                                <br>
                                ​<strong>Dessert</strong> 2,00€
                                <br>
                                <strong>​Soft (33cl.)</strong> 1,20€
                                <br>
                                <strong>Eau plate (50cl.)</strong> 1,20€
                                <br>
                                ​<strong>Vin - le verre</strong> 1,80
                                <br>
                                <strong>​Vin - 1/4</strong> 3,50€
                                <br>
                                <strong>​Vin - 1/2</strong> 7,50€
                                <br>
                                ​<strong>Vin - la bouteille</strong> 10,00€
                                <br>
                                <strong>Café/Thé</strong> 1,20€

                            </small>
                            <footer class="footer">
                                <small>
                                </small>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="./assets/img/Photosachetees/restaurant/resto3.jpg" alt="Card image">
            </div>
            <div class="card p-3 text-right">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">
                        <small class="text-muted">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </small>
                    </footer>
                </blockquote>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Horaire et accés</h4>

                    <p> Service assuré de 12h à 13h45.</p>
                    <p class="card-text">
                        <strong>Adresse:<br></strong>

                        Rue Philomène 37

                        1030 Bruxelles.<br>


                        Bus 65 et 66, tram 25 arrêt "Coteaux".

                        Bus 59 arrêt "Geefs".</p>
                </div>
            </div>
        </div>

    </div>

</div>

<div id="centrer">
<div class="overlay overlay-contentpush">
    <button type="button" class="overlay-close">Close</button>
        <h1>Les menus</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">​​Mardi 29 mai</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Mercredi 30</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">​​​​​Mardi 05 juin</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Mercredi 06 juin</a>
                    <a class="list-group-item list-group-item-action" id="list-un-list" data-toggle="list" href="#list-un" role="tab" aria-controls="un">Mardi 12 juin</a>
                    <a class="list-group-item list-group-item-action" id="list-deux-list" data-toggle="list" href="#list-deux" role="tab" aria-controls="deux">Mercredi 13 juin</a>
                </div>
                </center>
            </div>
        </div>
    <center>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
            <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Entrée : Tajine au fromage
                        Plat : Poulet à la canelle et aux légumes
                        Dessert : Semoule à la fleur d'oranger</div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        Potage : tomate et basilic
                        Entrée : Mousse de poisson
                        Plat : Dorade au four, légumes méditerranéen
                        Dessert : Crêpe Suzette</div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        Entrée : Salsa aux concombres
                        Plat : Fajitas au poulet
                        Dessert : Crème au caramel aux saveur du mexique</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">potage : Soupe au lait de coco et poulet
                        Entrée : Rouleaux de printemps
                        Plat : Riz sauté au canard
                        Dessert : Glace</div>
                    <div class="tab-pane fade" id="list-un" role="tabpanel" aria-labelledby="list-settings-list">Entrée : Pastilla aux fruits de mer
                        Plat : Tajine de viande et dattes farcies
                        Dessert : Cigares aux amandes</div>
                    <div class="tab-pane fade" id="list-deux" role="tabpanel" aria-labelledby="list-settings-list">Potage : Gaspacho andalou
                        Entrée : Beignets de courgettes
                        Plat : Escalope de veau, tomate grillée
                        Dessert : Tiramisu aux fraises</div>
                </div>
            </div>
            </div>
        </div>
    </center>
        </div>
</div>
</div>


</body>

</html>