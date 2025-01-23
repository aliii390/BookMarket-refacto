<?php 



final class  Vendeur extends User{

    protected $id ;
    protected $nom_entreprise ;
    protected $adresse_entreprise ;


    public function __construct($id , $nom_entreprise , $adresse_entreprise)
    {
        parent::__construct($id , $nom_entreprise , $adresse_entreprise);
        $this->id = $id;
        $this->nom_entreprise = $nom_entreprise;
        $this->adresse_entreprise = $adresse_entreprise;
    }
  
}
