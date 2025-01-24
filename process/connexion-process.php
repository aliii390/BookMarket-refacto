
<?php

require_once '../utils/autoloader.php';

session_start();

$userRepository = new UserRepository();


$user = $userRepository->findByEmail($_POST['email']);


// pareil pour l'email
if (!$user) {
    header("Location: ../public/connexion.php?error=emailoumdpinvalid");
    exit;
}

// si mdp incorrect je le renvoie sur la page de co avc une erreur
if (!password_verify($_POST['mdp'], $user->getMdp())) {

    header("Location: ../public/connexion.php?error=emailoumdpinvalid");
    exit;
}

$_SESSION['user'] = $user;


header("Location: ../public/accueil.php");
exit;



