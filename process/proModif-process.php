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
    }

    if ($user->getUserPro() !== null) {
        $userPro = $user->getUserPro();

        if (isset($_POST['companyName'])) {
            $userPro->setNomEntreprise($_POST['companyName']);
        }

        if (isset($_POST['companyAddress'])) {
            $userPro->setAdresseEntreprise($_POST['companyAddress']);
        }

        $userProRepository = new UserProRepository();
        $userProRepository->updateUserPro($userPro);
    }

    $userRepository = new UserRepository();
    $userRepository->updateUser($user);

    $_SESSION['user'] = $user;


    header('Location: ../public/profilPro.php');
    exit();
}
?>