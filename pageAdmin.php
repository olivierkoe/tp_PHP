<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["admin_name"])) {
    header("Location: ./CONNEXION/login_form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PAGE ADMIN</title>
</head>

<body class="bg-black">
    <div class="sucess text-center text-warning">
        <h1>Bienvenue <?php echo $_SESSION['admin_name']; ?>!</h1>
        <p>C'est votre tableau de bord.</p>
    </div>
    <?php
    include "./GestionARTICLES/pdo.php";
    include "./GestionARTICLES/requete.php";

    //On vérifie si $_GET['id] est initialisé...
    if (isset($_GET['id'])) {

        //On stock dans $user les informations de l'utilisateur lié à l'id dans $_GET['id']
        $user = requete_findUser($_GET['id']);

        //On stock le nom de l'image lié à l'utilisateur
        $currentImg = $user->users_img;

        //On supprime l'image dans notre dossier images/ à l'aide de la fonction php unlink()
        unlink("images/" . $currentImg);

        //On supprime l'utilisateur en question
        requete_deleteUser($_GET['id']);

        //Puis on redirige vers index.php, et on fait passer "suppr" dans un GET : $_GET['success']
        header("location: index.php?success=suppr");
    }

    //On stock tout les utilisateurs en BdD dans $users
    $users = requete_displayUsers();
    ?>

    <h1 class="text-center my-5 text-warning">Ajouter un ARTICLES</h1>

    <div class="container mb-5">
        <div class="d-flex flex-row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="./GestionARTICLES/traitement_ajout_user.php" method="POST" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <label for="name" class="input-group-text">Nom :</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <label for="intro" class="input-group-text">Introduction :</label>
                        <input type="text" name="intro" id="intro" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <label for="descri" class="input-group-text">Description :</label>
                        <input type="text" name="descri" id="descri" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <label for="mail" class="input-group-text">Auteur :</label>
                        <input type="text" name="mail" id="mail" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <input type="file" name="img" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    </div>

                    <div class="input-group mb-3">
                        <button class="btn btn-dark">ENVOYER</button>
                    </div>
                </form>
            </div>
            <div class="col-4"></div>
        </div>


    </div>

    <?php

    //On vérifie si $_GEt['errors'] est bien initialisé...
    if (isset($_GET['errors'])) {
    ?>
        <!-- Si c'est le cas, j'affiche une div -->
        <div class="container alert alert-danger text-center">
            <?php

            //Et dans cette div, j'affiche un message d'erreur en fonction du contenu de $_GET['errors']
            if ($_GET['errors'] === "existe")
                echo "L'utilisateur que vous souhaitez ajouter, est déjà inscrit";

            else if ($_GET['errors'] === "taille")
                echo "La taille de l'image dépasse 100 Ko";

            else if ($_GET['errors'] === "format")
                echo "Votre image doit être un jpg, jpeg ou png";

            else if ($_GET['errors'] === "erreur")
                echo "Le fichier uploadé n'est pas une image";

            else if ($_GET['errors'] === "ajout")
                echo "Une erreur est survenue lors de l'envoie du formulaire";

            else if ($_GET['errors'] === "fichier")
                echo "Veuillez choisir une image";
            ?>
        </div>
    <?php

        //Même chose, je vérifie si $_GET['success'] est bien initialisé...
    } else if (isset($_GET['success'])) {
    ?>
        <!-- Si oui, j'affiche une div -->
        <div class="container alert alert-success text-center">
        <?php

        //Et en fonction du contenu de $_GET['success'], j'affiche un message
        if ($_GET['success'] === "ajout") {
            echo "Ajout effectuée";
        } else if ($_GET['success'] === "modif") {
            echo "Modification effectuée";
        } else if ($_GET['success'] === "suppr") {
            echo "Suppression effectuée";
        }
    }
        ?>
        </div>

        <div class="container">
            <div class="d-flex flex-wrap">
                <?php

                foreach ($users as $value) {
                ?>
                    <div class=" card mx-auto mb-3" style="width: 18rem;">
                        <img src="./GestionARTICLES/images/<?= htmlspecialchars($value->users_img) ?>" class="card-img-top" alt="..." style="object-fit: cover; height: 250px;">
                        <div class="card-body" style="height: auto;">
                            <h5 class="card-title"><?= htmlspecialchars($value->users_name) ?></h5>
                            <a href="./GestionARTICLES/index.php" class="text-dark text-decoration-none card-text"><?= htmlspecialchars($value->users_intro) ?></a>
                        </div>
                        <div>
                            <p class="card-text ms-3 mb-3">Auteur : <?= htmlspecialchars($value->users_mail) ?></p>
                            <p class="card-text ms-3 mb-3">Auteur : <?= htmlspecialchars($value->users_date) ?></p>
                        </div>
                        <div class="text-center mb-3">
                            <a href="../pageAdmin.php?id=<?= $value->id_users ?>" class="btn btn-outline-dark">SUPPRIMER</a>
                            <a href="./GestionARTICLES/modifier.php?name=<?= $value->users_name ?>&intro=<?= $value->users_intro ?>&descri=<?= $value->users_descri ?>&mail=<?= $value->users_mail ?>&img=<?= $value->users_img ?>&id=<?= $value->id_users ?>" class="btn btn-outline-dark">MODIFIER</a>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <a href="./CONNEXION/logout.php" class="me-3 btn btn-danger">Déconnexion</a>
            <a href="#" class="btn btn-dark">RETOUR HAUT</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>