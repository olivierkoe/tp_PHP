<?php

include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PAGE ADMIN</title>

</head>

<body>

    <div class="container">

        <div class="content">
            <h3>Salut, <span>admin</span></h3>
            <h1>Bienvenu <span><?php echo $_SESSION['admin_name'] ?></span></h1>
            <p>Ici tu peut administrer le site</p>
            <a href="login_form.php" class="btn">connexion</a>
            <a href="register_form.php" class="btn">Créer un compte</a>
            <a href="logout.php" class="btn">Déconnexion</a>
        </div>

    </div>

</body>

</html>