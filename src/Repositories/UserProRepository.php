


<?php

class UserProRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }




    public function findById(int $id): ?UserPro
    {

        $stmt = $this->pdo->prepare("SELECT * FROM user_pro WHERE id = :id");
        $stmt->bindParam(":id", $id, PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$data) {
            return null;
        }

        $userPro = UserProMapper::MapToObject($data);
        return $userPro;
    }


    public function createAdressePro(UserPro $userPro): int
    {
        $stmt = $this->pdo->prepare("INSERT INTO user_pro (nom_entreprise, adresse_entreprise) VALUES (:nom_entreprise, :adresse_entreprise)");
        $stmt->execute([
            'nom_entreprise' => $userPro->getNomEntreprise(),
            'adresse_entreprise' => $userPro->getAdresseEntreprise()
        ]);
        return $this->pdo->lastInsertId();
    }
}
