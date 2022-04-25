<?php

// include "pdo.php";
include "requete.php";
// include "modifier.php";
var_dump($_POST);

// $com = requete_findCom($_POST['id']);

requete_modify_com($_POST['titre'], $_POST['com'], $_POST['auteur'], $_POST['id']);

// header("location: ../user_page?success=modif");
