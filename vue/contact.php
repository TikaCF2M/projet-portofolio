<?php
session_start(); ?>
    <!doctype html>
    <html lang="en">
    <head>
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Nunito&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
    <?php include "nav.php"
    ?>

    <div class="container contact">

        <fieldset class="jumbotron shadow-lg">

            <?php
            /*
             * affichage erreur ou reussite de l'envoie
             */
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

            <h3 id="titre-formulaire">Me contacter:</h3>
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
                        <input required name="tel" type="text" class="form-control" id="Tel4"
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
                    <label for="inputMessage">Votre message</label><textarea id="inputMessage" name="message"
                                                                             class="form-control"
                                                                             is="textarea-autogrow" <?= isset($_SESSION['input']['message']) ? $_SESSION['input']['message'] : ""; ?>>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias, architecto dolores, excepturi illo mollitia placeat qui sed soluta totam unde, voluptatem voluptatibus. Ab accusantium adipisci architecto, blanditiis consequuntur corporis culpa debitis eligendi, enim error eum labore maxime molestiae nisi nulla recusandae suscipit ut velit veritatis, vitae. A atque autem obcaecati perspiciatis? Architecto aut culpa et, ex facere in iusto maiores modi nisi repellat sapiente similique soluta velit! Aspernatur debitis, enim ipsum iste natus necessitatibus neque reprehenderit vel? Aut, dolorum.</textarea>
                </div>


                <div class="form-group">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-toggle="modal"
                            data-target="#exampleModalScrollable">Mentions légales
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mentiontitre" id="exampleModalScrollableTitle">Mentions
                                        légales</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body condition">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium soluta,
                                    tempore? Accusamus accusantium consectetur consequatur consequuntur deserunt dolor
                                    doloribus et fuga impedit labore libero nobis obcaecati, perferendis quaerat
                                    quisquam quo quod ratione repellat similique, sit sunt suscipit, veniam vitae
                                    voluptas voluptatibus! Assumenda delectus dolores doloribus eaque et magni maiores
                                    molestias numquam officia, perspiciatis quaerat, quis quod suscipit veritatis
                                    voluptatibus? Dolorum id inventore, laudantium mollitia odit reprehenderit tempore
                                    unde voluptatum. Adipisci aliquam, amet, asperiores commodi corporis deserunt
                                    distinctio doloremque et excepturi id maxime molestiae placeat quas quidem soluta
                                    tenetur voluptate? Aspernatur at cupiditate deserunt ipsa natus nobis repudiandae
                                    rerum sint voluptate? Exercitationem impedit, natus nihil pariatur quaerat quod
                                    voluptates. Excepturi facere laboriosam laborum officiis quibusdam rerum sapiente
                                    vitae voluptate! Aspernatur distinctio eum fuga laboriosam libero minus non,
                                    officiis, quaerat quia rerum sunt suscipit! A, aliquid consectetur dolorem
                                    exercitationem illo labore minima repudiandae! Aut obcaecati officia pariatur. Ab
                                    architecto eos explicabo hic, id inventore minus necessitatibus nemo, odit sint
                                    temporibus ut veritatis voluptate! Autem blanditiis commodi delectus distinctio
                                    dolorem ea earum, eius harum, labore laborum laudantium libero magnam minima
                                    molestias nihil numquam placeat possimus, quasi quod ratione suscipit totam vero
                                    voluptates. Ad aperiam corporis iusto minima neque odit quibusdam velit voluptas
                                    voluptatem!
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input required name="checkbox" class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            J'ai lu et j'accepte les mentions légales.
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">Envoyez!</button>
            </form>
            <h2>debug</h2>
            <?= var_dump($_SESSION) ?>
    </div>
    <script src="../vue/app.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
    </html>
<?php
unset($_SESSION['input']);
unset($_SESSION['success']);
unset($_SESSION['errors']);