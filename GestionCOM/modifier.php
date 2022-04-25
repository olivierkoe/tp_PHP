<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Modifier</title>
</head>

<body>
    <?php
    include "pdo.php";
    include "requete.php";

    //Si $_GET esy vide, redirige vers index.php
    if (empty($_GET)) {
        header("location: index.php");
    }
    ?>

    <h1 class="text-center my-5"><?= htmlspecialchars($_GET['titre']) ?></h1>

    <div class="container mb-5">

        <!-- Formulaire de modification avec des inputs préremplis à l'aide de l'attribut html value="" -->
        <form action="traitement_modifier.php" method="POST" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <label for="titre" class="input-group-text">Titre :</label>
                <input type="text" name="titre" id="titre" class="form-control" value="<?= htmlspecialchars($_GET['titre']) ?>">
            </div>
            <div class="input-group mb-3">
                <label for="com" class="input-group-text">Commentaire :</label>
                <input type="text" name="com" id="com" class="form-control" value="<?= htmlspecialchars($_GET['com']) ?>">
            </div>
            <div class="input-group mb-3">
                <label for="auteur" class="input-group-text">Auteur :</label>
                <input type="text" name="auteur" id="auteur" class="form-control" value="<?= htmlspecialchars($_GET['auteur']) ?>">
            </div>

            <div class="d-none input-group mb-3">
                <input type="text" class="form-control" name="id" value="<?= $_GET['id'] ?>">
            </div>

            <div class="input-group mb-3">
                <!-- <button class="btn btn-dark">MODIFIER</button> -->
                <a href="./traitement_modifier.php" class="btn btn-dark">MODIFIER</a>
            </div>
        </form>

        <!-- Ici un simple bouton qui renvoie sur notre page d'accueil -->
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <a href="../index.php" class="me-3 btn btn-dark">RETOUR ACCUEIL</a>
            <a href="../user_page.php" class="btn btn-dark">RETOUR PAGE UTILISATEUR</a>
        </div>

    </div>

</body>

</html>