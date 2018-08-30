<?php
/**
 * index
 */
require_once "v/header.php";
require_once "v/menu.php";

if (isset($_GET['page'])) {
    if (isset($_GET['pageAdmin'])) {
        require_once "c/controllerAdmin.php";
    }
    require_once "c/controllerPublic.php";
} else {
    require_once "c/controllerPublic.php";
}

require_once "v/footer.php";

?>

<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/style.css"/>


<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script>
    $(function () {
        $("#menu").menu();

        $("#accordion").accordion({
            collapsible: true
        });

        $("#accordion1").accordion({
            collapsible: true
        });

        $("#accordion2").accordion({
            collapsible: true
        });

        $(document).ready(function () {

            $('.ciao').css('display', 'none');

            $('.ciao').fadeIn(1000);


            $('.link').click(function () {

                event.preventDefault();

                newLocation = this.href;

                $('.ciao').fadeOut(2000, newpage);

            });

            function newpage() {

                window.location = newLocation;

            }

        });

    });


</script>