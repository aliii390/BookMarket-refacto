

<?php 


 abstract class User{
    protected int $id;
    protected string $nom;
    protected string $prenom ;
    protected string $email ; 
    protected string $mdp ;
    protected string $telephone ; 
    protected string $role ;
    protected int $idUserPro;


    public function __construct($id, $nom , $prenom , $email , $mdp, $telephone, $role , $idUserPro)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->telephone = $telephone;
        $this->role = $role;
        $this->idUserPro = $idUserPro;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

        /**
         * Get the value of telephone
         */ 
        public function getTelephone()
        {
                return $this->telephone;
        }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

    /**
     * Get the value of idUserPro
     */ 
    public function getIdUserPro()
    {
        return $this->idUserPro;
    }
}