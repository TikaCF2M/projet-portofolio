<?php
session_start();
$user = implode($_SESSION['user']);
if (isset($_SESSION['connectAlert'])) {
    ?>
    <div class="alert-success">
        <?= "Bienvenue " . $user . "  vous êtes bien connecté!"; ?>
    </div>
    <?php
    unset($_SESSION['connectAlert']);
}
if (isset($_SESSION['connect']) || isset($_SESSION['user'])) {
    $helloUser = "Hey ! Bienvenue " . $user . ". Tu as eu xxx visiteurs";
} else {
    session_destroy();
    header("location:connect.php");
}
if (isset($_POST['disconnect'])) {
    $_SESSION['disconnect'] = 1;
    unset($_SESSION['pwd']);
    unset($_SESSION['user']);
    unset($_SESSION['connect']);
    header("location:connect.php");
}
