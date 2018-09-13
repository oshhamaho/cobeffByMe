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
        <h1 class="display-3">Nous contacter</h1>

    </div>


    <!--Section: Contact v.2-->
    <section class="section">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-5">Des questions</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Contactez nous via notre formulaire de contact ci-dessous.</p>

        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-md-0 mb-5">
                <form id="contactFform" role="form" action="process.php" method="POST">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="name" name="name" class="form-control" required>
                                <div class="help-block with-errors"></div>
                                <label for="name" class="">Votre nom</label>
                            </div>
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6">
                            <div class="md-form mb-0">
                                <input type="text" id="email" name="email" class="form-control" required>
                                <div class="help-block with-errors"></div>
                                <label for="email" class="">Votre email</label>
                            </div>
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->


                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" required></textarea><div class="help-block with-errors"></div>
                                <label for="message">Message</label>
                            </div>

                        </div>
                    </div>
                    <!--Grid row-->

                </form>

                <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Envoyer</button>
                <div class="status"></div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 text-center">
                <ul class="list-unstyled mb-0">
                    <li><i class="fa fa-map-marker fa-2x"></i>
                        <p>1030 Schaerbeek</p>
                        <p>Rue Philomène 39</p>
                    </li>

                    <li><i class="fa fa-phone mt-4 fa-2x"></i>
                        <p>02 250 35 60</p>
                    </li>

                    <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                        <p>info@cobeff.be</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

        </div>

    </section>
    <!--Section: Contact v.2-->

</div>


</body>


</html>