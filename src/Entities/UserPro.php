<?php

final class UserPro
{

    private ?int $id;
    private string  $nomEntreprise;
    private string $adresseEntreprise;

    public function __construct( string $nomEntreprise, string $adresseEntreprise , ?int $id = null)
    {
        $this->id = $id;
        $this->nomEntreprise = $nomEntreprise;
        $this->adresseEntreprise = $adresseEntreprise;
    }


    /**
     * Get the value of id
     */
    public function getId() : int
    {
        return $this->id;
    }

     /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id) : self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom_entreprise
     */
    public function getNomEntreprise() : string
    {
        return $this->nomEntreprise;
    }



    public function setNomEntreprise(string $nomEntreprise): self
    {
        $this->nomEntreprise = $nomEntreprise;
        return $this;
    }

    /**
     * Get the value of adresse_entreprise
     */
    public function getAdresseEntreprise() : string
    {
        return $this->adresseEntreprise;

    }

    public function setAdresseEntreprise(string $adresseEntreprise): self{
        $this->adresseEntreprise = $adresseEntreprise;
        return $this;
    }


    

   
}
