<?php 


class UserProMapper{
    

    public static function MapToObject(array $data) : UserPro
    {

        return new UserPro(
            $data['nom_entreprise'],
            $data['adresse_entreprise'],
            $data['id']
           
        );
    }
}


// mapper finio pour l'inscription