<?php
session_start(); ?>
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

    <div class="container">

        <fieldset class="jumbotron">

            <?php
            if (array_key_exists('errors', $_SESSION)): ?>
                <div class="alert-danger">
                    <?= implode("<br>", $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php
            if (array_key_exists('success', $_SESSION)): ?>
                <div class="alert-success">
                    <?= "Votre mail a bien été envoyé " ?>
                </div>
            <?php endif; ?>

            <h3>Me contacter:</h3>
            <form action="../vue/post_contact.php" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="prenom4">Prenom</label>
                        <input required name="prenom" type="text" class="form-control" id="prenom4" placeholder="Prenom"
                               value="<?= isset($_SESSION['input']['prenom']) ? $_SESSION['input']['prenom'] : ""; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nom4">Nom</label>
                        <input required name="nom" type="text" class="form-control" id="nom4"
                               placeholder="Nom"
                               value="<?= isset($_SESSION['input']['nom']) ? $_SESSION['input']['nom'] : ""; ?>">
                    </div>
                    <div class="form-group col-md-6">

                        <label for="inputEmail4">Email</label>
                        <input required name="email" type="email" class="form-control" id="inputEmail4"
                               placeholder=".....@"
                               value="<?= isset($_SESSION['input']['email']) ? $_SESSION['input']['email'] : ""; ?>">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Tel4">Tel</label>
                        <input name="tel" type="text" class="form-control" id="Tel4"
                               placeholder="04"
                               value="<?= isset($_SESSION['input']['tel']) ? $_SESSION['input']['tel'] : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Adresse</label>
                    <input name="adresse" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"
                           value="<?= isset($_SESSION['input']['adresse']) ? $_SESSION['input']['adresse'] : ""; ?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Ville</label>
                        <input name="ville" type="text" class="form-control" id="inputCity"
                               value="<?= isset($_SESSION['input']['ville']) ? $_SESSION['input']['ville'] : ""; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Pays</label>
                        <select name="pays" id="inputState" class="form-control">
                            <option selected>Veuillez choisir...</option>
                            <option>Suisse</option>
                            <option>Luxembourg</option>
                            <option>Maroc</option
                            <option>Belgique</option>
                            <option>France</option>
                            <option>Canada(Quebec)</option>
                            <option>Benin</option>
                            <option>Burkina Faso</option>
                            <option>République démocratique du Congo</option>
                            <option>Monaco</option>
                            <option>Autre...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Code Postal</label>
                        <input name="postal" type="text" class="form-control" id="inputZip"
                               value="<?= isset($_SESSION['input']['postal']) ? $_SESSION['input']['postal'] : ""; ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputMessage">Votre message</label>
                    <textarea id="inputMessage" name="message"
                              class="form-control"  <?= isset($_SESSION['input']['message']) ? $_SESSION['input']['message'] : ""; ?>></textarea>
                </div>


                <div class="form-group">
                    <div class="form-check">
                        <input name="checkbox" class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            J'ai lu et j'accepte
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Envoyez!</button>


            </form>
            <h2>debug</h2>
            <?= var_dump($_SESSION) ?>
    </div>
    </body>
    </html>
<?php
unset($_SESSION['input']);
unset($_SESSION['success']);
unset($_SESSION['errors']);