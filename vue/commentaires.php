<?php

$sql = "SELECT * FROM commentaires ORDER BY date DESC";
$request = mysqli_query($db, $sql)
or die("Erreur n° " . mysqli_errno($db) . " Description : " . mysqli_error($db));

?>
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
<form class="was-validated" method="post" action="">
    <div class="mb-3">
        <label for="validationTextarea">Votre commentaire</label>
        <textarea name="text" class="form-control is-invalid" id="validationTextarea"
                  placeholder="Commentaire...."
                  required></textarea>
        <div class="invalid-feedback">
            <button type="submit">Poster !</button>

        </div>
    </div>
    <?php

    while ($item = mysqli_fetch_assoc($request)) {
        ?>
        <h3><?= $item['com_user_name'] ?>(auteur)</h3>
        <p><?= $item['text'] ?></p>
        <p>Le <?= $item['date'] ?></p>
        <hr>
        <?php

    } ?>
    <h2>Debug</h2>

    <?php

    var_dump($_POST); ?>

</body>
</html>