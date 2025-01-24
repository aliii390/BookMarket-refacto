


<?php 

class UserProRepository extends AbstractRepository{

    public function __construct()
    {
        parent::__construct();
    }




    public function findById(int $id): ?UserPro{

        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE id = :id");
        $stmt->bindParam(":id" , $id , PDO::PARAM_STR);
        $stmt->execute();
             
        $data = $stmt->fetch();

        if(!$data){
            return null;
        }

        $userPro = UserProMapper::MapToObject($data);
        return $userPro;
    }


    public function createUser(User $user): int
{
    $sql = "INSERT INTO user (nom, prenom, email, mdp, telephone, role, id_user_pro) VALUES (:nom, :prenom, :email, :mdp, :telephone, :role, :id_user_pro)";
    
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $user->getNom(),
        ':prenom' => $user->getPrenom(),
        ':email' => $user->getEmail(),
        ':mdp' => $user->getMdp(),
        ':telephone' => $user->getTelephone(),
        ':role' => $user->getRole(),
        ':id_user_pro' => $user->getUserPro() ? $user->getUserPro()->getId() : null
    ]);
    
    return $this->pdo->lastInsertId();
}

    public function createAdressePro( UserPro $userPro): int{
        $stmt = $this->pdo->prepare("INSERT INTO user_pro (nom_entreprise, adresse_entreprise) VALUES (:nom_entreprise, :adresse_entreprise)");
        $stmt->execute([
            'nom_entreprise' => $userPro->getNomEntreprise(),
            'adresse_entreprise' => $userPro->getAdresseEntreprise()
        ]);
        return $this->pdo->lastInsertId();
    }
}