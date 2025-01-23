<?php 


class UserMapper{
    

    public static function MapToObject(array $data)
    {


        if(isset($data['id_user_pro'])){
           $user = new Vendeur(
                $data['id'],
                $data['nom_entreprise'],
                $data['adresse_entreprise'],
               
            );
        } else{
           $user = new Client (
                $data['id'],
                $data['nom'],
                $data['prenom'],
                $data['email'],
                $data['mdp'],
                $data['telephone'],
                $data['role'],
            );
        }
     return $user;
    }
}


// mapper finio pour l'inscription