

<?php


final class Client extends User{

    public function __construct($id , $nom , $prenom , $mdp , $email, $telephone , $role)
    {
        parent::__construct($id , $nom , $prenom , $email , $telephone , $role);
    }
}