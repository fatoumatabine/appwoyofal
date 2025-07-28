<?php
namespace Src\Controller;

class TrancheController
{
    public function index()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Liste des tranches (exemple)',
            'data' => []
        ]);
    }

    public function show($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Détail de la tranche $id (exemple)",
            'data' => null
        ]);
    }

    public function create()
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => 'Tranche créée (exemple)'
        ]);
    }

    public function update($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Tranche $id mise à jour (exemple)"
        ]);
    }

    public function delete($id)
    {
        header('Content-Type: application/json');
        echo json_encode([
            'message' => "Tranche $id supprimée (exemple)"
        ]);
    }
}
