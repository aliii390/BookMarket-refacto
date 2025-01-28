<?php 


final class PostLivre{

 
    private UserPro $userPro;
    // private string $urlLivre ;
    private string $titre ;
    private string $imgPath;
    // private string $imgAlt;  //pour apres
    private string $description ;
    private  int $prix ;
    private string $etatLivre ; 
    private string $auteur ;
    

    public function __construct( UserPro $userPro ,  string $titre , string $imgPath ,   string $description , int $prix , string $etatLivre , string $auteur )
    {
       
        $this->userPro = $userPro;
        // $this->urlLivre = $urlLivre;
        $this->titre = $titre;
        $this->imgPath = $imgPath;
        // $this->imgAlt = $imgAlt;
        $this->description = $description;
        $this->prix = $prix;
        $this->etatLivre = $etatLivre;
        $this->auteur = $auteur;
    }


   

    /**
     * Get the value of idUserPro
     */ 
    public function getUserPro(): UserPro
    {
        return $this->userPro;
    }

    /**
     * Set the value of idUserPro
     *
     * @return  self
     */ 
    public function setIdUserPro(UserPro $userPro): self
    {
        $this->userPro = $userPro;

        return $this;
    }

    /**
     * Get the value of urlLivre
     */ 
    // public function getUrlLivre()
    // {
    //     return $this->urlLivre;
    // }

    // /**
    //  * Set the value of urlLivre
    //  *
    //  * @return  self
    //  */ 
    // public function setUrlLivre($urlLivre)
    // {
    //     $this->urlLivre = $urlLivre;

    //     return $this;
    // }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of imgPath
     */ 
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * Set the value of imgPath
     *
     * @return  self
     */ 
    public function setImgPath($imgPath)
    {
        $this->imgPath = $imgPath;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of etatLivre
     */ 
    public function getEtatLivre()
    {
        return $this->etatLivre;
    }

    /**
     * Set the value of etatLivre
     *
     * @return  self
     */ 
    public function setEtatLivre($etatLivre)
    {
        $this->etatLivre = $etatLivre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }
}