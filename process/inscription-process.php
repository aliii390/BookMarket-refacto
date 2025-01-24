<?php

require_once '../utils/autoloader.php';

session_start();

$userRepository = new UserRepository();

$user = $userRepository->findByEmail($_POST['email']);


if ($user) {
    header("Location: ../public/inscription.php?error=emailexiste");
    exit;
}

$hash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

$user = new User($_POST['nom'], $_POST['prenom'], $_POST['email'], $hash, $_POST['telephone'], $_POST['role']); 


if ($user->getRole() === "Vendeur") {
    $userProRepository = new UserProRepository();
    $userPro = new UserPro($_POST['companyName'], $_POST['companyAddress']);
    $idUserPro = $userProRepository->createAdressePro($userPro);

    $userPro->setId($idUserPro);
    $user->setUserPro($userPro);
  
}


$idUser = $userRepository->createUser($user);

$user->setId($idUser);



$_SESSION['user'] = $user;

header("Location: ../public/accueil.php");
exit;
