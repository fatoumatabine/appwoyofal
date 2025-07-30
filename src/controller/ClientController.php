<?php
namespace Src\Controller;

use Src\Repository\ClientRepository;
use App\Core\Database;

class ClientController
{
    public function index()
    {
        header('Content-Type: application/json');
        try {
            $pdo = \App\Core\Database::getInstance();
            $repo = new \Src\Repository\ClientRepository($pdo);
            $clients = $repo->findAll();
            // On transforme les objets Client en tableau associatif
            $data = array_map(function($client) {
                return [
                    'id' => $client->getId(),
                    'nom' => $client->getNom(),
                    'prenom' => $client->getPrenom(),
                ];
            }, $clients);
            echo json_encode([
                'message' => 'Liste des clients',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            http_response_code(500);
            echo json_encode([
                'message' => 'Erreur lors de la récupération des clients',
                'error' => $e->getMessage()
            ]);
        }
    }

    public function show($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Détail du client $id (exemple)",
            'data' => null
        ]);
    }

    public function create()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Client créé (exemple)'
        ]);
    }

    public function update($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Client $id mis à jour (exemple)"
        ]);
    }

    public function delete($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Client $id supprimé (exemple)"
        ]);
    }
}
