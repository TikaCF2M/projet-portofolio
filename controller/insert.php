<?php
$text = htmlspecialchars(strip_tags(trim($_POST['text'])), ENT_QUOTES);
$errors = [];
if (!array_key_exists('text', $_POST) || $_POST['text'] == '') {
    $errors['nom'] = "Vous n'avez pas écrit de commentaire";
}
if (!empty($text)) {
    $sql = "INSERT INTO commentaires (text) VALUES ('$text')";
    mysqli_query($db, $sql) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
    header("location: ?q=tutojs");

} else {
    header("location: ?q=tutojs");
}



