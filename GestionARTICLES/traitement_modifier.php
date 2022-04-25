<?php

include "pdo.php";
include "requete.php";
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Si on modifie l'image...
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_FILES['img']['size'] > 0) {

    //On commence par refaire le même traitement d'image qu'à l'ajout
    $dir = "images/";
    $file = $_FILES['img'];

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //Si on ne modifie pas l'image...
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
} else if ($_FILES['titre']['size'] === 0) {

    //Ici on sépare le nom de l'image et son extension et on les stock dans le tableau $newImg
    $newImg = explode(".", $_POST['img']);

    //On sépare le numéro aléatoire et le nom de l'image pour pouvoir réutiliser le même numéro
    $oldRand = explode("_", $newImg[0]);

    //On créé le nouveau nom d'image avec le même numéro
    $newTrueImg = $oldRand[0] . "_" . $_POST['name'] . "." . $newImg[1];

    //On récupère le nom de l'image existante, et dans $currentImg on stock le chemin de l'image actuelle dans images/
    $user = requete_findUser($_POST['id']);
    $currentImg = "images/" . $user->users_img;

    //On créé le nouveau chemin de la nouvelle image
    $target = "images/" . $newTrueImg;

    //On renome l'ancienne image par la nouvelle
    rename("images/" . $user->users_img, $target);

    //On lance la requête pour modifier 
    requete_modify($_POST['name'], $_POST['intro'], $_POST['descri'], $_POST['mail'], $newTrueImg, $_POST['id']);

    header("location: ../pageAdmin?success=modif");
} else {

    header("location: ../pageAdmin.php?errors=" . $e->getMessage());
}
