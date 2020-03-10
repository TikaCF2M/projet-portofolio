<?php
if (!isset($_GET['q'])) {
    include "../vue/accueil.php";
} else

    switch ($_GET['q']) {
        case "tuto":
            include "../vue/tuto.php";
            break;
        case "lien":
            include "../vue/lien.php";
            break;
        case "contact":
            include "../vue/contact.php";
            break;
        case "portofolio":
            include "../vue/portofolio.php";
            break;
        case "tutojs":
            include "../vue/tutojs.php";
            break;
        case"exojs":
            include "../vue/exojs.php";
            break;
        default:
            echo "oust";
    }

