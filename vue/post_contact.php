<?php
$errors = [];
if (!array_key_exists('nom', $_POST) || $_POST['nom'] == '') {
    $errors['nom'] = "Vous n'avez pas renseigné votre nom";
}
if (!array_key_exists('prenom', $_POST) || $_POST['prenom'] == '') {
    $errors['prenom'] = "Vous n'avez pas renseigné votre prenom";
}
if (!array_key_exists('email', $_POST) || $_POST['email'] == '' || filter_has_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if (!array_key_exists('message', $_POST) || $_POST['message'] == '') {
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}
if (!array_key_exists('tel', $_POST) || $_POST['tel'] == '') {
    $errors['tel'] = "Vous n'avez pas renseigné votre numéro de téléphone";
}
var_dump($errors);
session_start();
if (!empty($errors)) {

    $_SESSION['errors'] = $errors;
    $_SESSION['input'] = $_POST;
    header('location:../controller/index.php?q=contact');
} else {
    $_SESSION['success'] = 1;
    $message = $_POST['message'];
    $headers = 'From:Tika@local.dev';
    mail('tika@local.dev', 'Formulaire de contact', $message, $headers);
    header('location:../controller/index.php?q=contact');

}

