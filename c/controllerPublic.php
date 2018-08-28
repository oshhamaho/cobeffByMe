<?php

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case "nousConnaitre":
            require_once "v/nousConnaitre.php";
            break;

        case "seFormer":
            if (isset($_GET['vendeuse'])) {
                require_once "v/vendeuse.php";
            } elseif (isset($_GET['cuisine'])) {
                require_once "v/cuisine.php";
            } elseif (isset($_GET['auxiliaire'])) {
                require_once "v/auxiliaire.php";
            } elseif (isset($_GET['services'])) {
                require_once "v/services.php";
            } elseif (isset($_GET['entretien'])) {
                require_once "v/entretien.php";
            } elseif (isset($_GET['jury'])) {
                require_once "v/jury.php";
            } elseif (isset($_GET['cess'])) {
                require_once "v/cess.php";
            }
            require_once "v/seFormer.php";
            break;

        case "nousContacter":
            require_once "v/nousContacter.php";
            break;

        case "resto":
            require_once "v/resto.php";
            break;

    }

} else {
    require_once "v/home.php";
}