<?php
session_start();
$erreurLog = false;
if (isset($_POST['username']) && isset($_POST['password'])) {
    try {
        $dsn = 'mysql:dbname=formulaire;host=localhost';
        $user = 'root';
        $password = hash('sha256', $_POST['password']);
        $username = $_POST['username'];

        $dbh = new PDO($dsn, $user, '');
        $sql = 'SELECT id from utilisateurs where username = :username and mot_de_passe =:password';
        $query = $dbh->prepare($sql);
        $query->execute([
            'username' => $username,
            'password' => $password,
        ]);
        $user = $query->fetch();
        if ($user == false) {
            throw new Exception("Utilisateur introuvable");
        }
        $_SESSION['username'] = $_POST['username'];
        header('location: index1.php');
    } catch (Exception $e) {
        $erreurLog = $e->getMessage();
    }
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

        form {
            font-weight: bold;
            margin-top: 80px;
            padding: 20px;
            border: solid 2px black;
            border-radius: 10px;
        }

        #err{
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1 align="center">Connectez vous</h1>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="username" class="col-sm-2 col-form-label">username:</label>
            <div class="col-sm-10">
                <input type="username" class="form-control" id="username" name="username">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="pass" class="col-sm-2 col-form-label">Mot de passe:</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="pass" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Se connecter</button>
        <button type="reset" class="btn btn-danger">Effacer</button>
        
    </form>
    <?php
    if ($erreurLog != false) {
    ?>
        <div class="alert alert-danger" role="alert" id="err">
            <?php echo $erreurLog;
            ?>
        </div>
    <?php
    }
    ?>
</body>

</html>