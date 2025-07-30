<?php
namespace Src\Service;

use Src\Entity\Client;

interface IClientService
{
    public function getAllClients(array $filters): array;
    public function getClientById(int $id): ?Client;
    // public function addClient(array $data): bool;
}