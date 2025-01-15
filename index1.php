
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        body {
            width: 1000px;
            margin: auto;
            background-color: rgb(170, 170, 170);
        }

        .card {
            display: block;
            margin-inline: auto;
            margin-top: 80px;
            background-color: rgb(56, 56, 56);
            color: white;
        }

        h6{
            font-weight: bold;
            font-size: 30px;
        }
    </style>
</head>

<body>
<?php

session_start();

if (isset($_SESSION["username"])) {
    ?>
    <h6>Bienvenue, <?php echo $_SESSION["username"];?>!</h6>
    <?php
}
?>

    <h1 align="center">Page d'accueil</h1>
   
    <div align="center" class="card" style="width: 24rem;">
        <div class="card-body">
            <h5 class="card-title">accedez à la page secrète!</h5>
            <br>
            <a href="register.php"><button type="button" class="btn btn-success">Inscription</button></a>
            <a href="logout.php"><button type="button" class="btn btn-success">déconnexion</button></a>
            <a href="secret.php"><button type="button" class="btn btn-success">page secrète</button></a>
        </div>
    </div>
</body>

</html>