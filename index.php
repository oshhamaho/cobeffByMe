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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/style.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-grid.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-reboot.css"/>
<link rel="stylesheet" href="assets/css/bootstrap-grid.css.map"/>
<link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map"/>
<link rel="stylesheet" href="assets/css/bootstrap-reboot.css.map"/>

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