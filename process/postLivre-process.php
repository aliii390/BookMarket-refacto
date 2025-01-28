<?php
require_once '../utils/autoloader.php';
session_start();

$userProRepo = new UserProRepository();
$postLivreRepo = new PostLivreRepository();

$userPro = $_SESSION['user']->getUserPro();
$titre = $_POST['titre'];
$imgPath = $_FILES['img_path']['name'];
$description = $_POST['description'];
$prix = $_POST['prix'];
$etatLivre = $_POST['etat_livre'];
$auteur = $_POST['auteur'];

$targetDir = "../assets/img/";
$targetFile = $targetDir . basename($imgPath);

// var_dump($targetFile);
// die();
// move_uploaded_file($_FILES['img_path']['tmp_name'], $targetFile);

if (!move_uploaded_file($_FILES['img_path']['tmp_name'], $targetFile)) {
    header("Location: ../public/accueil.php?errorUpload=1");
exit;
}

$postLivre = new PostLivre($userPro, $titre, $targetFile, $description, $prix, $etatLivre, $auteur);

var_dump($postLivre);


$postLivreRepo->postezLivre($postLivre);

// TODO utiliser le repository de postlive pour save en BDD les bonnes informations
// faire sa apres la pause 

header("Location: ../public/accueil.php");
exit;
