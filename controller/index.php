<?php

require_once 'config.php';

$db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);

if (!$db) {
    die("Erreur n° " . mysqli_connect_errno() . " Description : " . mysqli_connect_error());
}


// requette commenttaire

if (isset($_POST['text'])) {
    require_once "insert.php";
} else {
    require_once "index.php";
}
 ;
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
            include "../vue/tutoJavascript.php";
            break;
        case"exojs":
            include "../vue/ExerciceJavascript.php";
            break;

        default:
            echo "oust";
    }

