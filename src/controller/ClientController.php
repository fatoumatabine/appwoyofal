<?php
namespace Src\Controller;

class ClientController
{
    public function index()
    {
        // Exemple de réponse JSON
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Liste des clients (exemple)',
            'data' => []
        ]);
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
