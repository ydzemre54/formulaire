<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            position: absolute;
            right: 250px;
            bottom: 0px;
            width: 1500px;
        }
    </style>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        ?><img src="../formulaire/lebron.jpg" alt="">
        <?php
    }else{
        header('location: login.php');
    }
    ?>
</body>
</html>