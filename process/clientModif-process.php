<?php

include_once '../utils/autoloader.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_SESSION['user'];

    if (isset($_POST['nom'])) {
        $user->setNom($_POST['nom']);
    }

    if (isset($_POST['prenom'])) {
        $user->setPrenom($_POST['prenom']);
    }

    if (isset($_POST['email'])) {
        $user->setEmail($_POST['email']);
    }

    if (isset($_POST['telephone'])) {
        $user->setTelephone($_POST['telephone']);
    } else {
       
        $user->setTelephone(''); 
    }

    // if (isset($_POST['nomEntreprise']) && $user->getUserPro() !== null) {
    //     $user->getUserPro()->setNomEntreprise($_POST['nomEntreprise']);
    // }

    // if (isset($_POST['adresseEntreprise']) && $user->getUserPro() !== null) {
    //     $user->getUserPro()->setAdresseEntreprise($_POST['adresseEntreprise']);
    // }

    $userRepository = new UserRepository();
    $userRepository->updateUser($user);

   
    $_SESSION['user'] = $user;

    header('Location: ../public/profil.php');
    exit();
 }
?>