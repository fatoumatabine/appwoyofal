
<?php
namespace Src\Repository;

use App\Entity\Client as EntityClient;
use Src\Entity\Client;
use PDO;

class ClientRepository
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function findById(int $id): ?EntityClient
    {
        $stmt = $this->db->prepare("SELECT * FROM client WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data ? new EntityClient($data) : null;
    }

    public function findAll(): array
    {
        $stmt = $this->db->query("SELECT * FROM client");
        $clients = [];
        while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $clients[] = Client::toObject($data);
        }
        return $clients;
    }

    public function findAllAsArray(): array
    {
        $stmt = $this->db->query("SELECT * FROM client");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}