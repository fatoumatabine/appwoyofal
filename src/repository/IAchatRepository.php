<?php
namespace Src\Repository;

use App\Entity\Achat as EntityAchat;
use Src\Entity\Achat;

interface IAchatRepository {
    public function findById(int $id): ?EntityAchat;
    public function findAll(): array;
    public function save(EntityAchat $achat): void;
    public function delete(int $id): void;
}
