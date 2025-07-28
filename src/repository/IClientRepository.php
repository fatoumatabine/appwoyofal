<?php

namespace Src\Repository;

use App\Entity\Client as EntityClient;
use Src\Entity\Client;

interface IClientRepository {
    public function findById(int $id): ?EntityClient;
    public function findAll(): array;
    public function save(EntityClient $client): void;
    public function delete(int $id): void;
}
