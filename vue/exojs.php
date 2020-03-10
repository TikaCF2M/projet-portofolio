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
        <h1>Les exercises en Javascript</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Premier exercises</h3>
            <h3>TP:Faire un pierre feuille ciseau</h3>
            <p>Vous allez essayer</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p>

                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Solution
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">

                    const buttons = document.querySelectorAll("button"); <br>
                    let score = 0;<br>

                    for (let i = 0; i < buttons.length; i++) {<br>
                    buttons[i].addEventListener("click", function () {<br>
                    const joueur = buttons[i].innerHTML;<br>
                    const robot = buttons [Math.floor(Math.random() * buttons.length)].innerHTML;<br>
                    let resultat = "";<br>

                    if (joueur === robot) {<br>
                    resultat = "Egalité"<br>

                    } else if ((joueur === "Pierre" && robot === "Ciseaux") || (joueur === "Feuille" && robot ===
                    "Pierre") || (joueur === "Ciseaux" && robot === "Feuille")) {<br>
                    resultat = "gagné";<br>
                    ++score;<br>
                    } else {<br>
                    resultat = "perdu"<br>
                    }
                    document.querySelector(".resultat").innerHTML = `<br>
                    Joueur :${joueur} </br><br>

                    Robot : ${robot}</br>

                    ${resultat}<br>
                    `;
                    console.log(`Joueur : ${joueur} VS Robot :$ {robot}`);<br>
                    console.log(score)<br>


                    });<br>

                    }

                </div>
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