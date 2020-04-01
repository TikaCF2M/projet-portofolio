<?php
require_once 'verification.php'
?>
<!doctype html>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style type="text/css">
    body {
        background-color: #f5f5f5;
    }
</style>
<?php include 'nav.php' ?>
<div class="container">
    <div class="jumbotron">
        <div class="container text-center"><h1>Administration</h1>
            <div class="jumbotron-fluid bg-white">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ajouter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Modifier</a>
                    </li>
                </ul>
                <h2 class="mt-5">Accueil</h2>
            </div>
<?= $helloUser ?>
        </div>
    </div>


</div>
</body>
</html>
