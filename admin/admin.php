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
    <div class="jumbotron shadow-sm">
        <div class="container text-center"><h1>Administration</h1>
            <div class="jumbotron-fluid bg-white shadow-sm">
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


            <?php
            //TODO system pour changer de pseudo et de mot de passe

            // Upload image
            if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                if ($_FILES['image']['size'] <= 3000000) {
                    $informationImage = pathinfo($_FILES['image']['name']);
                    $extentionImage = $informationImage['extension'];
                    $extentionArray = ['png', 'gif', 'jpg', 'jpeg'];
                    if (in_array($extentionImage, $extentionArray)) {
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . time() . basename($_FILES['image']['name']));
                        ?>
                        <div class="alert-success">
                            Votre image a bien été envoyé !
                        </div><?php

                    } else {
                        ?>
                        <div class="alert-warning"> Votre image format d'image est invalide. Format accepté: png gif jpg
                            jpeg de moin de 1me
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="alert-warning"> Votre image doit être égal ou inférieur a 1MO</div>
                    <?php
                }

            }
            ?>
            <form method="post" action="" enctype="multipart/form-data">

                <input onchange="showMyImage(this)" type="file" name="image" accept="image/*"
                       value="uploads/1585900608TIFA.jpg" required/>
                <img id="affiche" style="width:20%; margin-top:10px;" src="" alt=""/>
                <button type="submit" name="envoyer">Envoyer</button>

            </form>

            <script> // prévisualiser l'image
                function showMyImage(fileInput) {
                    var files = fileInput.files;
                    for (var i = 0; i < files.length; i++) {
                        var file = files[i];
                        var imageType = /image.*/;
                        if (!file.type.match(imageType)) {
                            continue;
                        }
                        var img = document.getElementById("affiche");
                        img.file = file;
                        var reader = new FileReader();
                        reader.onload = (function (aImg) {
                            return function (e) {
                                aImg.src = e.target.result;
                            };
                        })(img);
                        reader.readAsDataURL(file);
                    }
                }</script>
        </
    </div>
</div>
</body>
</html>
