

<?php


final class User
{
    private ?int $id;
    private string $nom;
    private string $prenom;
    private string $email;
    private string $mdp;
    private string $telephone;
    private string $role;
    private ?UserPro $userPro;


    public function __construct(string $nom, string $prenom, string $email, string $mdp, string  $telephone, string $role, ?int $id = null, ?UserPro $userPro = null)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->mdp = $mdp;
        $this->telephone = $telephone;
        $this->role = $role;
        $this->userPro = $userPro;
    }



    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Get the value of nom
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Get the value of email
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Get the value of mdp
     */
    public function getMdp(): string
    {
        return $this->mdp;
    }

    /**
     * Get the value of telephone
     */
    public function getTelephone(): string
    {
        return $this->telephone;
    }

    /**
     * Get the value of role
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * Get the value of userPro
     */
    public function getUserPro(): ?UserPro
    {
        return $this->userPro;
    }

    /**
     * Set the value of userPro
     *
     * @return  self
     */
    public function setUserPro($userPro): self
    {
        $this->userPro = $userPro;

        return $this;
    }




    public function getNomEntreprise(): ?string
    {
        return $this->userPro ? $this->userPro->getNomEntreprise() : null;
    }


    // public function setNomEntreprise($userPro){

    // }

    public function getAdresseEntreprise(): ?string
    {
        return $this->userPro ? $this->userPro->getAdresseEntreprise() : null;
    }

  

    public function setNom ($nom){
        $this->nom = $nom;
        return $this;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function setTelephone($telephone){
        $this->telephone = $telephone;
        return $this;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }

}
