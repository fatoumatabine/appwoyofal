<?php
namespace Src\Repository;

use Src\Entity\Tranche;
use PDO;

class TrancheRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findById(int $id): ?Tranche
    {
        $stmt = $this->db->prepare("SELECT * FROM tranche WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new Tranche($data) : null;
    }

    public function findAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM tranche");
        $tranches = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $tranches[] = new Tranche($data);
        }
        return $tranches;
    }
}