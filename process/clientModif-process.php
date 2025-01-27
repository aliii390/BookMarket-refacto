<?php

include_once '../public/profil.php';
// session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_SESSION['user'];

    $user->setNom($_POST['nom']);
    $user->setPrenom($_POST['prenom']);
    $user->setEmail($_POST['email']);
    $user->setTelephone($_POST['telephone']);


    // Mettre à jour l'utilisateur dans la base de données
    $userRepository = new UserRepository();
    $userRepository->updateUser($user);

    // Mettre à jour l'utilisateur dans la session
    $_SESSION['user'] = $user;

    // Rediriger vers la page de profil
    header('Location: ../public/profilPro.php');
    exit();
}
?>