<?php
require_once '../controller/config.php';
$db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
session_start();
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
<div class="container">

    <form class="form-signin" METHOD="post" action="">
        <div class="text-center mb-4">
            <img class="mb-4"
                 src="https://actugeekgaming.com/wp-content/uploads/2019/09/Final-Fantasy-VII-Remake-Tifa-1.jpg" alt=""
            ">
            <h1 class="h3 mb-3 font-weight-normal">ADMIN</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusantium aspernatur, consequatur culpa ea
                error expedita explicabo facere id ipsam nulla odit quam qui similique sunt, temporibus voluptatibus.
                Possimus, voluptatum!/p>
        </div>

        <div class="form-label-group">
            <input type="text" name="user" id="user" class="form-control" placeholder="User" required autofocus>
            <label for="inputEmail">User</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"
                   required>
            <label for="inputPassword">Password</label>
        </div>


        <button class="btn btn-lg btn-primary btn-block" name="envoi" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>
        <?php if (isset($_SESSION['disconnect'])) {
            ?>
            <div class="alert-success">
                <?= "Vous avez bien été deconnecté" ?>
            </div> <?php
            unset($_SESSION['disconnect']);
        } ?>
        <?php if (isset($_SESSION['inscription'])) {
            ?>
            <div class="alert-success">
                <?= 'Vous avez bien été inscript , connectez vous !' ?>
            </div> <?php
            unset($_SESSION['inscription']);
        } ?>

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
                ?>
                <div class="alert-danger">
                    <?= "mauvaise combinaison"; ?>
                </div>
                <?php
            } else {
                $_SESSION['connect'] = 1;
                $_SESSION['connectAlert'] = 1;
                $_SESSION['user'] = $resultUser;
                $_SESSION['pwd'] = $resulPassword;
                header("location:admin.php");
            }
        }
        if (isset($_SESSION['connect'])) {
            header('location:admin.php');
        }
        var_dump($_SESSION);
        ?>
    </form>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Inscription
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Inscription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-signin" METHOD="post" action="">
                        <div class="text-center mb-4">

                            <h1 class="h3 mb-3 font-weight-normal">ADMIN</h1>
                            <p>Formulaire d'inscription !</p>
                        </div>
                        <form action="" method="POST">
                            <div class="form-label-group">
                                <input type="text" name="inscriptionUser" id="user" class="form-control"
                                       placeholder="User" required autofocus>
                                <label for="inputEmail">User</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" name="inscriptionPassword" id="inputPassword"
                                       class="form-control" placeholder="Password"
                                       required>
                                <label for="inputPassword">Password</label>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <?php if (isset($_POST['inscriptionUser'])) {
                    $pwd = htmlspecialchars(strip_tags(trim($_POST['inscriptionPassword'])), ENT_QUOTES);
                    $user = htmlspecialchars(strip_tags(trim($_POST['inscriptionUser'])), ENT_QUOTES);
                    $query = "INSERT INTO `utilisateur` ( `user`, `password`) VALUES ('$user','$pwd');";
                    mysqli_query($db, $query) or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));
                    header('location:connect.php');
                    $_SESSION['inscription'] = 1;
                }
                ?>
            </div>

        </div>

    </div>

</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
