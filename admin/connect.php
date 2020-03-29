<?php
require_once '../controller/config.php';
$db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
?>
<!doctype html>
<html lang="en">
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-signin" METHOD="post" action="">
    <div class="text-center mb-4">
        <img class="mb-4" src="https://www.nautiljon.com/images/perso/00/86/tifa_lockhart_4168.jpg" alt="" width="72"
             height="72">
        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a
                    href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and
                Firefox.</a></p>
    </div>

    <div class="form-label-group">
        <input type="text" name="user" id="user" class="form-control" placeholder="User" required autofocus>
        <label for="inputEmail">User</label>
    </div>

    <div class="form-label-group">
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
    </div>


    <button class="btn btn-lg btn-primary btn-block" name="envoi" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
    <?php
    if (isset($_POST['user'])) {
        $pwd = htmlspecialchars(strip_tags(trim($_POST['password'])), ENT_QUOTES);
        $user = htmlspecialchars(strip_tags(trim($_POST['user'])), ENT_QUOTES);
        $queryUser = "SELECT user FROM utilisateur WHERE user='$user' AND  password = '$pwd' ";
        $queryPwd = "SELECT password FROM utilisateur WHERE password = '$pwd' AND  user = '$user' ";
        $testUser = mysqli_query($db, $queryUser) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
        $testPassword = mysqli_query($db, $queryPwd) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
        $resultUser = mysqli_fetch_assoc($testUser);
        $resulPassword = mysqli_fetch_assoc($testPassword);
        if (($resultUser == null || $resulPassword == null) || ((implode($resultUser) !== $_POST['user']) || (implode($resulPassword) !== $_POST['password']))) {
            echo "mauvaise combinaison";
        } else {
            session_start();
            $_SESSION['user'] = $resultUser;
            header("location: admin.php");
        }
    }
    ?>

</form>

</body>
</html>
