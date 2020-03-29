<?php
require_once '../controller/config.php';

$db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
session_start();

if (isset($_SESSION['connect']) && $_SESSION['connect'] == 1) {
    $pwd = implode($_SESSION['pwd']);;
    $user = implode($_SESSION['user']);;
    $queryUser = "SELECT user FROM utilisateur WHERE user='$user' AND  password = '$pwd' ";
    $queryPwd = "SELECT password FROM utilisateur WHERE password = '$pwd' AND  user = '$user' ";
    $testUser = mysqli_query($db, $queryUser) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
    $testPassword = mysqli_query($db, $queryPwd) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
    $resultUser = mysqli_fetch_assoc($testUser);
    $resulPassword = mysqli_fetch_assoc($testPassword);
    var_dump($_SESSION);
} else {
    header("location:connect.php");
}
if ($pwd == implode($resulPassword) && $user == implode($resultUser)) {
    echo "Bienvenue " . $user;
}
if (isset($_POST['disconnect'])) {
    unset($_SESSION['pwd']);
    unset($_SESSION['user']);
    unset($_SESSION['connect']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
    <button type="submit" name="disconnect">Se déconnecter</button>
</form>
</body>
</html>
