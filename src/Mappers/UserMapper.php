<?php 


class UserMapper{
    

    public static function MapToObject(array $data) : User
    {

        return new User(
            $data['nom'],
            $data['prenom'],
            $data['email'],
            $data['mdp'],
            $data['telephone'],
            $data['role'],
            $data['id'],
            $data['user_pro'],
        );
    }
}


// mapper finio pour l'inscription