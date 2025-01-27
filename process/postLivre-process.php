<?php
require_once '../utils/autoloader.php';
session_start();

$userProRepo = new UserProRepository();
$postLivreRepo = new PostLivreRepository(); 

$idUserPro = $_SESSION['user']->getUserPro()->getId();
$titre = $_POST['titre'];
$imgPath = $_FILES['img_path']['name']; 
$description = $_POST['description'];
$prix = $_POST['prix'];
$etatLivre = $_POST['etat_livre'];
$auteur = $_POST['auteur'];

$targetDir = "../assets/img";
$targetFile = $targetDir . basename($imgPath);
move_uploaded_file($_FILES['img_path']['tmp_name'], $targetFile);

$postLivre = new PostLivre($idUserPro, $titre, $targetFile, $description, $prix, $etatLivre, $auteur);

if ($postLivreRepo->PostezLivre($postLivre)) {
  
    header("Location: ../public/success.php");
    exit;
} else {
    header("Location: ../public/error.php");
    exit;
}