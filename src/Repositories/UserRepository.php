


<?php

class UserRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }




    public function findByEmail(string $email): ?User
    {

        $stmt = $this->pdo->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch();

        if (!$data) {
            return null;
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
}
