<?php
namespace Src\Repository;

use App\Entity\Compteur as EntityCompteur;
use Src\Entity\Compteur;

interface ICompteurRepository {
    public function findById(int $id): ?EntityCompteur;
    public function findAll(): array;
    public function save(EntityCompteur $compteur): void;
    public function delete(int $id): void;
}
