<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ACCUEIL</title>
</head>

<body class="bg-dark text-warning">


    <?php

    include "./GestionARTICLES/pdo.php";
    include "./GestionARTICLES/requete.php";

    if (isset($_GET['id'])) {

        $articles = requete_findUser($_GET['id']);

        $currentImg = $articles->articles_img;

        unlink("./ARTICLES/images/" . $currentImg);

        requete_deleteArticles($_GET['id']);

        header("location: ../index.php?success=suppr");
    }

    $users = requete_displayUsers();
    ?>

    <h1 class="text-center my-5">ARTICLES sur la Mythologie</h1>
    <div class="d-flex flex-row">
        <div class="col-4"></div>
        <div class="col-4 text-center mb-3">
            <img src="./GestionARTICLES/images/montOlympe.jpeg" alt="pentheon" style="height: 200px;">
        </div>
        <div class="col-4"></div>
    </div>
    <div class="container">
        <h2 class="text-center mb-3">Liste des articles</h2>
        <div class="d-flex flex-wrap">

            <?php

            foreach ($users as $value) {
            ?>

                <div class=" card mx-auto mb-3" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title text-dark"><?= htmlspecialchars($value->users_name) ?></h5>
                        <a href="./GestionARTICLES/index.php" class="text-dark text-decoration-none card-text" style="height: 250px;"><?= htmlspecialchars($value->users_intro) ?></a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="text-center mb-5">
        <a href="./CONNEXION/login_form.php" class="btn btn-primary">CONNEXION</a>
        <a href="./CONNEXION/register_form.php" class="btn btn-success">INSCRIPTION</a>
        <a href="#" class="btn btn-light text-dark ">RETOUR HAUT</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>