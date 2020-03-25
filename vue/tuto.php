<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include "nav.php"
?>
<div class="container-fluid">
    <div class="row-cols-12 text-center titretuto">
        <h1>Bienvenue sur mes tutoriels</h1>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <div class="col-6">
                <div id="test" class="card m-3 p-3 shadow-lg" style="width: 18rem;">
                    <img src="../vue/js-img.png" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title ">Les condition en Javascript</h5>
                        <p class="card-text">Nous allons essayer de mieux comprendre les conditions en Javascript.</p>
                        <a href="?q=tutojs" class="btn btn-secondary">Commencer</a>
                    </div>
                </div>
            </div>
            <div class="card card m-3 p-3 shadow-lg" style="width: 18rem;">
                <img src="../vue/js-img.png" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title">Les exercises en Javascript</h5>
                    <p class="card-text">Mettons en pratique ce que nous avons appris sur les conditions en
                        Javascript.</p>
                    <a href="?q=exojs" class="btn btn-secondary">Commencer</a>
                </div>
            </div>
        </div>
    </div>
    <script src="test.js" defer></script>
</body>
</html>