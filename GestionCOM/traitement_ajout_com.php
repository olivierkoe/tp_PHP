<?php

include "pdo.php";
include "requete.php";
var_dump($_FILES);
var_dump($_POST);
$testPseudo = requete_findComName($pseudo);
$result = requete_addCom($_POST['titre'], $_POST['com'], $_POST['auteur']);

header("location: ../user_page.php?success=ajout");
