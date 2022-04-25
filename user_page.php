<?php
include './CONNEXION/config.php';
include './gestionARTICLES/requete.php';
include './gestionARTICLES/pdo.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:./CONNEXION/login_form.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PAGE UTILISATEUR</title>

</head>

<body class="bg-dark">

    <div class="container bg-dark text-center">

        <div class="content text-warning mb-3">
            <h3>Bonjour, <span><?php echo $_SESSION['user_name'] ?> et bienvenu</span></h3>
            <h1>Vous êtes sur la page membre</h1>
            <div class="d-flex flex-row">
                <div class="col-4"></div>
                <div class="col-4">
                    <h2>Nous laisser un commentaire</h2>
                    <form action="./GestionCOM/traitement_ajout_com.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <label for="titre" class="input-group-text">Titre du commentaire :</label>
                            <input type="text" name="titre" id="titre" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <label for="com" class="input-group-text">Commentaire :</label>
                            <input type="text" name="com" id="com" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <label for="auteur" class="input-group-text">Auteur :</label>
                            <input type="text" name="auteur" id="auteur" class="form-control">
                        </div>
                        <div class="input-group mb-3">
                            <button class="btn btn-primary">ENVOYER</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
        $com = requete_displayCom();
        ?>
        <div class="container">
            <div class="d-flex flex-wrap">
                <?php
                foreach ($com as $value) {
                ?>
                    <div class=" card mx-auto mb-3" style="width: 18rem;">
                        <div class="card-body" style="height: auto;">
                            <h5 class="card-title"><?= htmlspecialchars($value->titre) ?></h5>
                            <a href="./GestionCOM/index.php" class="text-dark text-decoration-none card-text"><?= htmlspecialchars($value->commentaire) ?></a>
                        </div>
                        <div>
                            <p class="card-text ms-3 mb-3">Auteur : <?= htmlspecialchars($value->commentaire) ?></p>
                        </div>
                        <div class="text-center mb-3">
                            <a href="user_page.php?id=<?= $value->id ?>" class="btn btn-outline-dark">SUPPRIMER</a>
                            <a href="./GestionCOM/modifier.php?titre=<?= $value->titre ?>&com=<?= $value->commentaire ?>&auteur=<?= $value->auteur ?>&id=<?= $value->id ?>" class="btn btn-outline-dark">MODIFIER</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>




        <div class="text-center  mt-3 pb-3">
            <a href="./CONNEXION/login_form.php" class="btn btn-success">connexion</a>
            <a href="./CONNEXION/register_form.php" class="btn btn-warning">Créer un compte</a>
            <a href="./CONNEXIO/logout.php" class="btn btn-danger">Déconnexion</a>
        </div>
    </div>
    </div>


</body>

</html>