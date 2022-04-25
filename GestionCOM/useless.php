<?php

if ($_FILES['img']['size'] > 0) {

    $info = pathinfo($_FILES['img']['name']);

    $errors = null;

    $users = requete_displayUsers();
    foreach ($users as $value) {
        if (ucfirst(strtolower($_POST['name'])) === $value->users_name) {
            $errors = "existe";
        }
    }

    if ($_FILES['img']['size'] > 1000000) {
        $errors .= "-taille";
    }

    if ($info['extension'] != "jpg" && $info['extension'] != "jpeg" && $info['extension'] != "png") {
        $errors .= "-format";
    }

    if ($errors === null) {
        // Si on est bon, c'est ici que ça se passe !
        move_uploaded_file($_FILES['img']['tmp_name'], "images/" . $_POST['name'] . "." . $info['extension']);
        $name = ucfirst(mb_strtolower($_POST['name'] . "." . $info['extension']));
        $result = requete_addUser($_POST['name'], $_POST['mail'], $name);
        if (!$result) {
            $errors .= "-ajout";
        }
    }
} else {
    $errors = "erreur";
}

header("location: index.php?errors=" . $errors);
