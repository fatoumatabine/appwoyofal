<?php
namespace Src\Repository;

use Src\Entity\Compteur;
use PDO;

class CompteurRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findById(int $id): ?Compteur
    {
        $stmt = $this->db->prepare("SELECT * FROM compteur WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new Compteur($data) : null;
    }

    public function findAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM compteur");
        $compteurs = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $compteurs[] = new Compteur($data);
        }
        return $compteurs;
    }
}