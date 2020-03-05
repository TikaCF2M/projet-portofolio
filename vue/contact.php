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
<?php include "nav.html"
?>
<div class="container">
    <fieldset
    <form method="post" action="post-contact.php">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="nom4">Nom</label>
                <input name="Nom" type="text" class="form-control" id="nom4" placeholder="Nom">
            </div>
            <div class="form-group col-md-6">
                <label for="prenom4">Prenom</label>
                <input name="prenom" type="text" class="form-control" id="prenom4" placeholder="Prenom">
            </div>
            <div class="form-group col-md-6">
                <label for="Tel4">Tel</label>
                <input name="Tel" type="text" class="form-control" id="Tel4" placeholder="Tel">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Addresse</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Ville</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Pays</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Suisse</option>
                    <option>Maroc</option
                    <option>Belgique</option>
                    <option>France</option>
                    <option>Canada(Quebec)</option>
                    <option>Benin</option>
                    <option>Burkina Faso</option>
                    <option>République démocratique du Congo</option>

                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Code Postal</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    J'ai lu et j'accepte
                </label>
            </div>
        </div>
        <button nom="button" type="submit" class="btn btn-secondary">Envoyez!</button>
    </form>
    </fieldset
</div>
</body>
</html>