<?php
include "../controller/config.php";
$db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
$errors = [];
if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {
    $errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('prenom', $_POST) || $_POST['prenom'] == '') {
    $errors['prenom'] = "Vous n'avez pas renseigné votre prenom";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || filter_has_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}
if (!array_key_exists('tel', $_POST) || $_POST['tel'] == '') {
    $errors['tel'] = "Vous n'avez pas renseigné votre numéro de téléphone";
}
session_start();
if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['input'] = $_POST;
    header('location:../controller/index.php?q=contact');
} else {
    $message = $_POST['message'];
    $headers = 'From:Tika@local.dev';
    mail('tika@local.dev', 'Formulaire de contact', $message, $headers);
    $_SESSION['success'] = 1;
    // test collecte donnees
    $prenom = htmlspecialchars(strip_tags(trim($_POST['prenom'])), ENT_QUOTES);
    $nom = htmlspecialchars(strip_tags(trim($_POST['nom'])), ENT_QUOTES);
    $email = filter_has_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $tel = htmlspecialchars(strip_tags(trim($_POST['tel'])), ENT_QUOTES);
    $adresse = htmlspecialchars(strip_tags(trim($_POST['adresse'])), ENT_QUOTES);
    $ville = htmlspecialchars(strip_tags(trim($_POST['ville'])), ENT_QUOTES);
    $pays = htmlspecialchars(strip_tags(trim($_POST['pays'])), ENT_QUOTES);
    $postal = htmlspecialchars(strip_tags(trim($_POST['postal'])), ENT_QUOTES);

    if (!empty($tel)) {
        $sql = "INSERT INTO donnees_utilisateur_contact(`prenom_contact`, `nom_contact`, `email_contact`, `tel_contact`, `adresse_contact`, `ville_contact`, `pays_contact`, `codePostal_contact`)  VALUES ('$prenom','$nom','$email','$tel','$adresse','$ville','$pays','$postal' )";
        mysqli_query($db, $sql);
    }
    header('location:../controller/index.php?q=contact');
}
