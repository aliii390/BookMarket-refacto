<?php 

require_once '../utils/autoloader.php';

session_start();

$userRepository = new UserRepository();

// $user = $userRepository->createUser($user);



if(!$user){
    $userData = [
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'mdp' => $_POST['mdp'],
        'telephone' => $_POST['telephone'],
        'role' => $_POST['role']
        
    ];
    var_dump($userData);
die();
// mon var dump récup tout mais y'a encore une  erreu via la variable 

    if($_POST['role'] === "Vendeur"){
        $user->AdressePro();
    }


    $userRepository->createUser($userData);

    $_SESSION['user'] = $user;
}