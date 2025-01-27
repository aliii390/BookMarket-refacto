<?php
class PostLivreRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function PostezLivre(PostLivre $postLivre): bool
    {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO livre (id_user_pro, titre, img_path, description, prix, etat_livre, auteur) VALUES (:id_user_pro, :titre, :img_path, :description, :prix, :etat_livre, :auteur)");
            $stmt->execute([
                ':id_user_pro' => $postLivre->getIdUserPro(),
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
}