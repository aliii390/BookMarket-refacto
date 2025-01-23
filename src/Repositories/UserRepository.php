


<?php 

class UserRepository extends AbstractRepository{

    public function __construct()
    {
        parent::__construct();
    }




    public function findByUser(string $user): ?User{

        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(":email" , $user , PDO::PARAM_STR);
        $stmt->execute();
             
        $data = $stmt->fetch();

        if(!$data){
            return null;
        }

        $data = UserMapper::MapToObject($data);
        return $data;
    }

    public function createUser(array $userData) {
        $sql = "INSERT INTO user (nom, prenom, email, mdp, telephone) VALUES (:nom, :prenom, :email, :mdp, :telephone)";
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nom', $userData['nom']);
        $stmt->bindParam(':prenom', $userData['prenom']);
        $stmt->bindParam(':email', $userData['email']);
        $stmt->bindParam(':mdp', $userData['mdp']);
        $stmt->bindParam(':telephone', $userData['telephone']);
        $stmt->execute();
    }


    public function AdressePro($dataPro){
        $stmt = $this->pdo->prepare("INSERT INTO user_pro (nom_entreprise, adresse_entreprise) VALUES (:nom_entreprise, :adresse_entreprise)");
        $stmt->execute([
            'nom_entreprise' => $dataPro['nom_entreprise'],
            'adresse_entreprise' => $dataPro['adresse_entreprise']
        ]);
    }
}