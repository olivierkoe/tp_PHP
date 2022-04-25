<?php

function requete_displayUsers()
{
    $db = connexion_BD();
    $sql = "SELECT * FROM articles ORDER BY users_name";
    $req = $db->prepare($sql);
    $req->execute([]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function requete_deleteUser($id)
{
    $db = connexion_BD();
    $sql = "DELETE FROM articles WHERE id_users = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id" => $id
    ]);
}

function requete_findUser($id)
{
    $db = connexion_BD();
    $sql = "SELECT * FROM articles WHERE id_users = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id" => $id
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function requete_findUserName($name)
{
    $db = connexion_BD();
    $sql = "SELECT users_name FROM articles WHERE users_name = :name";
    $req = $db->prepare($sql);
    $req->execute([
        ":name" => $name
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}

function requete_addUser($name, $intro, $descri, $mail, $img)
{
    $db = connexion_BD();
    $sql = "INSERT INTO articles (users_name,users_intro,users_descri,users_mail, users_img) VALUES (:name, :intro, :descri, :mail, :img)";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":name" => $name,
        ":intro" => $intro,
        ":descri" => $descri,
        ":mail" => $mail,
        ":img" => $img
    ]);
    return $result;
}

function requete_modify($name, $intro, $descri, $mail, $img, $id)
{
    $db = connexion_BD();
    $sql = "UPDATE articles SET users_name = :name,users_intro = :intro, users_descri = :descri, users_mail = :mail, users_img = :img WHERE id_users = :id";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":name" => $name,
        ":intro" => $intro,
        ":descri" => $descri,
        ":mail" => $mail,
        ":img" => $img,
        ":id" => $id
    ]);
    return $result;
}
//COMMENTAIRES
function requete_displayCom()
{
    $db = connexion_BD();
    $sql = "SELECT * FROM commentaires ORDER BY titre";
    $req = $db->prepare($sql);
    $req->execute([]);
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

function requete_deleteCom($id)
{
    $db = connexion_BD();
    $sql = "DELETE FROM commentaires WHERE id = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id" => $id
    ]);
}

function requete_findCom($id)
{
    $db = connexion_BD();
    $sql = "SELECT * FROM commentaires WHERE id = :id";
    $req = $db->prepare($sql);
    $req->execute([
        ":id" => $id
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}
function requete_findComName($titre)
{
    $db = connexion_BD();
    $sql = "SELECT titre FROM commentaires WHERE titre = :titre";
    $req = $db->prepare($sql);
    $req->execute([
        ":titre" => $titre
    ]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    return $data;
}
function requete_addCom($titre, $com, $auteur)
{
    $db = connexion_BD();
    $sql = "INSERT INTO commentaires (titre,commentaire,auteur) VALUES (:titre, :commentaire,:auteur)";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":titre" => $titre,
        ":commentaire" => $com,
        ":auteur" => $auteur,
    ]);
    return $result;
}


function requete_modify_Com($titre, $commentaire, $auteur, $id)
{
    $db = connexion_BD();
    $sql = "UPDATE Commentaires SET titre = :titre,commenteire = :commentaire, auteur = :auteur,  WHERE id = :id";
    $req = $db->prepare($sql);
    $result = $req->execute([
        ":titre" => $titre,
        ":commentaire" => $commentaire,
        ":auteur" => $auteur,
        ":id" => $id,

    ]);
    return $result;
}
