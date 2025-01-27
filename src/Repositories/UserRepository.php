


<?php

class UserRepository extends AbstractRepository
{

    private UserProRepository $userProRepo;

    public function __construct()
    {
        parent::__construct();
        $this->userProRepo = new UserProRepository();
    }




    public function findByEmail(string $email): ?User
    {

        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }


        if($data['id_user_pro'] !== null){
            $data['user_pro'] = $this->userProRepo->findById($data['id_user_pro']);
        } else {
            $data['user_pro'] = null;
        }


        $data = UserMapper::MapToObject($data);
        return $data;
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
    public function updateUser(User $user): bool
    {
        try {
            $this->pdo->beginTransaction();
    
            // Mettre à jour les informations de l'utilisateur
            $sql = "UPDATE user SET nom = :nom, prenom = :prenom, email = :email, telephone = :telephone, role = :role WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $user->getNom(),
                ':prenom' => $user->getPrenom(),
                ':email' => $user->getEmail(),
                ':telephone' => $user->getTelephone(),
                ':role' => $user->getRole(),
                ':id' => $user->getId()
            ]);
    
            // Mettre à jour les informations de UserPro si elles existent
            if ($user->getUserPro() !== null) {
                $sqlPro = "UPDATE user_pro SET nom_entreprise = :nomEntreprise, adresse_entreprise = :adresseEntreprise WHERE id = :id";
                $stmtPro = $this->pdo->prepare($sqlPro);
                $stmtPro->execute([
                    ':nomEntreprise' => $user->getUserPro()->getNomEntreprise(),
                    ':adresseEntreprise' => $user->getUserPro()->getAdresseEntreprise(),
                    ':id' => $user->getUserPro()->getId()
                ]);
            }
    
            $this->pdo->commit();
            return true;
        } catch (Exception $erreur) {
            $this->pdo->rollBack();
            throw $erreur;
        }
    }
}
