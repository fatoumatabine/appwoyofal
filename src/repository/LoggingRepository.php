<?php

namespace Src\Repository;

use PDO;
use Src\Entity\Logging;
use App\Core\Database;

class LoggingRepository implements ILoggingRepository
{

    private PDO $pdo;
    private string $table = "logging";

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

    // public function findAll(array $filter): array
    // {
    //     $query = "select * from {$this->table} limit :limit";
    //     $stmt = $this->pdo->prepare($query);
    //     $stmt->bindValue(':limit', $filter['limit'], PDO::PARAM_INT);
    //     $stmt->execute();
    //     return $stmt->fetchAll(PDO::FETCH_ASSOC);
    // }

    public function insert($entity): ?int
    {
        $query = "insert into {$this->table} (cni, date_heure, localisation, adresse_ip, statut) values (:cni, :date_heure, :localisation, :adresse_ip, :statut)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([
            'cni' => $entity->getCni(),
            'date_heure' => $entity->getDateHeure() ? $entity->getDateHeure()->format('Y-m-d H:i:s') : null,
            'localisation' => $entity->getLocalisation(),
            'adresse_ip' => $entity->getAdresseIp(),
            'statut' => $entity->getStatut() ? $entity->getStatut()->value : null
        ]);
        return $this->pdo->lastInsertId();
    }

    public function findById(int $id): ?Logging
    {
        $stmt = $this->pdo->prepare("SELECT * FROM logging WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new Logging(
            $data['id'],
            isset($data['date_heure']) ? new \DateTime($data['date_heure']) : null,
            $data['localisation'] ?? '',
            null, // statut à adapter si besoin
            $data['coderecharge'] ?? '',
            isset($data['nombrekilowatt']) ? (float)$data['nombrekilowatt'] : 0.0
        ) : null;
    }

    public function findAll(array $filters = []): array
    {
        $sql = "SELECT * FROM logging";
        if (isset($filters['limit'])) {
            $sql .= " LIMIT :limit";
        }
        $stmt = $this->pdo->prepare($sql);
        if (isset($filters['limit'])) {
            $stmt->bindValue(':limit', $filters['limit'], PDO::PARAM_INT);
        }
        $stmt->execute();
        $logs = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Adapter ici selon le constructeur Logging
            $logs[] = new Logging(
                $data['id'],
                isset($data['date_heure']) ? new \DateTime($data['date_heure']) : null,
                $data['localisation'] ?? '',
                null, // statut à adapter si besoin
                $data['coderecharge'] ?? '',
                isset($data['nombrekilowatt']) ? (float)$data['nombrekilowatt'] : 0.0
            );
        }
        return $logs;
    }
}
