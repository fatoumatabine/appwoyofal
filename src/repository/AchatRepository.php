<?php
namespace Src\Repository;

use Src\Entity\Achat;
use PDO;

class AchatRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findById(int $id): ?Achat
    {
        $stmt = $this->db->prepare("SELECT * FROM achat WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new Achat(
            $data['id'],
            $data['reference'],
            $data['coderecharge'],
            $data['nombrekilowatt'],
            $data['date_heure'],
            $data['prixkw'],
            $data['compteur']
        ) : null;
    }

    public function findAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM achat");
        $achats = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $achats[] = new Achat(
                $data['id'],
                $data['reference'],
                $data['coderecharge'],
                $data['nombrekilowatt'],
                $data['date_heure'],
                $data['prixkw'],
                $data['compteur']
            );
        }
        return $achats;
    }

    public function save(Achat $achat): void
    {
        // À compléter selon la structure de l'entité Achat
    }

    public function delete(int $id): void
    {
        $stmt = $this->db->prepare("DELETE FROM achat WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}