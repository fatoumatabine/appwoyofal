<?php


namespace Src\Service;

use Src\Entity\Citoyen;
use src\Entity\Client;
use Src\Repository\ICitoyenRepository;
use Src\Repository\IClientRepository;

class ClientService implements IClientService
{
    private IClientRepository $clientRepository;

    public function __construct(IClientRepository $clientRepository)
    {
        $this->clientRepository = $clientRepository;
    }

    public function getClientById(int $id): ?Client
    {
        return $this->clientRepository->findById($id);
    }

   

    public function getAllClients(array $filters): array
    {
        return $this->clientRepository->findAll($filters);
    }
}
