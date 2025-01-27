<?php

require_once '../utils/autoloader.php';

session_start();

$userRepository = new UserRepository();
// $userProRepository = new UserProRepository();

// Recherche de l'utilisateur par email
$user = $userRepository->findByEmail($_POST['email']);

// Vérification : l'utilisateur existe-t-il ?
if (!$user) {
    header("Location: ../public/connexion.php?error=emailoumdpinvalid");
    exit;
}

// Vérification du mot de passe
if (!password_verify($_POST['mdp'], $user->getMdp())) {
    header("Location: ../public/connexion.php?error=emailoumdpinvalid");
    exit;
}

$_SESSION['user'] = $user;

// Si l'utilisateur est un vendeur, redirection vers la page pro
if ($user->getRole() === "Vendeur") {
    header("Location: ../public/accueilPro.php");
} else {
    header("Location: ../public/accueil.php");
}

// Redirection par défaut pour les autres utilisateurs


exit;
