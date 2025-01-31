<?php
class PostLivreRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }


    // rajout de fonction pour voir les bon livres en fonction de leur id 

    public function findById(int $id): ?array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM livre WHERE id = :id");
        $stmt->execute([':id' => $id]);
        $livre = $stmt->fetch(PDO::FETCH_ASSOC);

        return $livre ?: null;
    }


    public function postezLivre(PostLivre $postLivre): bool
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO livre (id_user_pro, titre, img_path, description, prix, etat_livre, auteur) VALUES (:id_user_pro, :titre, :img_path, :description, :prix, :etat_livre, :auteur)");
            $stmt->execute([
                ':id_user_pro' => $postLivre->getUserPro()->getId(),
                ':titre' => $postLivre->getTitre(),
                ':img_path' => $postLivre->getImgPath(),
                ':description' => $postLivre->getDescription(),
                ':prix' => $postLivre->getPrix(),
                ':etat_livre' => $postLivre->getEtatLivre(),
                ':auteur' => $postLivre->getAuteur(),
            ]);
            return true;
        } catch (PDOException $error) {
            echo "Erreur de base de données : " . $error->getMessage();
            return false;
        }
    }



    public function getAllLivres(): array
    {
        $sql = "SELECT * FROM livre";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}