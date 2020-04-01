<?php
require_once '../controller/config.php';
$db = @mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
session_start();

if (isset($_SESSION['connect'])) {
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
} else {
    header("location:connect.php");
}

if (isset($_POST['disconnect'])) {
    unset($_SESSION['pwd']);
    unset($_SESSION['user']);
    unset($_SESSION['connect']);
    header("location:connect.php");
}