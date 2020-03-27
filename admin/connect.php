<?php
$pwd = "Testmdp";
$user = "Tika";

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
<form class="form-signin" METHOD="post">
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
    if ($user == $_POST['user'] && $pwd == $_POST['password']) {
        header("location: admin.php");
    }
    var_dump($_POST);

    ?>

</form>

</body>
</html>
