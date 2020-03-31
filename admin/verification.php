<?php
session_start();
$user = implode($_SESSION['user']);
if (isset($_SESSION['connect']) || isset($_SESSION['user']) || isset($_SESSION['pwd'])) {
    echo "Bienvenue " . $user;
} else {
    session_destroy();
    header("location:connect.php");

}
if (isset($_POST['disconnect'])) {
    unset($_SESSION['pwd']);
    unset($_SESSION['user']);
    unset($_SESSION['connect']);
    header("location:connect.php");
}
