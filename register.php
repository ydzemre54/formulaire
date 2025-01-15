<?php
if (isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password'])) {
    $dsn = 'mysql:dbname=formulaire;host=localhost';
    $user = 'root';
    $password = hash('sha256', $_POST['password']);
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $username = $_POST['username'];

    $dbh = new PDO($dsn, $user, '');
    $sql='INSERT INTO utilisateurs(nom_utilisateur, email_utilisateur, mot_de_passe,username) VALUES(:nom, :email, :password,:username)';
    $query = $dbh -> prepare($sql);
    $query -> execute([
        'nom'=>$nom,
        'email'=>$email,
        'password'=>$password,
        'username'=>$username,
    ]);

    header('location: login.php');
}
    
     ?>

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

        form{
            font-weight: bold;
            margin-top: 80px;
            padding: 20px;
            border: solid 2px black;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <h1 align="center">Inscrivez vous</h1>
    <form action="register.php" method="post">

        <div class="mb-3 row">
            <label for="nom" class="col-sm-2 col-form-label">Nom:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">username:</label>
            <div class="col-sm-10">
                <input type="username" class="form-control" id="username" name="username">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Mot de passe:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Se connecter</button>
        <button type="reset" class="btn btn-danger">Effacer</button>

    </form>

    
</body>

</html>